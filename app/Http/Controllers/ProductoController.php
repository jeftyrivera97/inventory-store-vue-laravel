<?php

namespace App\Http\Controllers;


use App\Http\Resources\ProductoResource;
use App\Models\Impuesto;
use App\Models\Producto;
use App\Models\ProductoCategoria;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tableHeaders = array(
            1 => "Codigo Producto",
            2 => "Descripcion",
            3 => "Categoria",
            4 => "Color",
            5 => "Proveedor",
            6 => "Tamaño",
            7 => "Existencias",
            8 => "Marca",
            9 => "Precio",
        );

        $modulo = "Productos";

        $contador = count(Producto::where('id_estado', 1)->get());
        $valor = Producto::where('id_estado', 1)->sum('valor');

        $valor = number_format($valor);
        $contador = number_format($contador);

        $contador = "$contador Productos en existencia";
        $valor = "L. $valor.00 en inventario";

        if ($request->has("query")) {
            $query =  $request->get("query");
            $data = ProductoResource::collection(
                Producto::with(['proveedor', 'categoria'])
                    ->where('id_estado', 1)
                    ->where(function ($q) use ($query) {
                        $q->where("descripcion", "like", "$query%")
                            ->orWhere("codigo_producto", "like", "$query%")
                            ->orWhere("marca", "like", "$query%")
                            ->orWhere("color", "like", "$query%")
                            ->orWhere("size", "like", "$query%")
                            ->orWhere("precio_venta", "like", "$query%")
                            ->orWhereHas('proveedor', function ($subQuery) use ($query) {
                                $subQuery->where('descripcion', 'like', "$query%");
                            })->orWhereHas('categoria', function ($subQuery) use ($query) {
                                $subQuery->where('descripcion', 'like', "$query%");
                            });
                    })
                    ->paginate(50)
                    ->appends(['query' => $query])
            );
            return Inertia::render('producto/index', compact('data', 'contador', 'valor', 'tableHeaders', 'modulo'));
        } else {

            $data = ProductoResource::collection(Producto::with(['proveedor', 'categoria'])->where('id_estado', 1)->paginate(50));
            return Inertia::render('producto/index', compact('data', 'contador', 'valor', 'tableHeaders', 'modulo'));
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $impuestos = Impuesto::where('id_estado', 1)->get();
        $categorias = ProductoCategoria::where('id_estado', 1)->get();
        $proveedores = Proveedor::where('id_estado', 1)->get();

        return Inertia::render('producto/create', compact('impuestos', 'categorias', 'proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id_usuario = Auth::id();
        $registro = now();
        $impuestoSeleccionado = $request->id_impuesto;
        $tipoImpuesto = Impuesto::find($impuestoSeleccionado);
        $id_impuesto = $tipoImpuesto->id;
        $valorImpuesto = $tipoImpuesto->valor;
        $precioVenta = $request->precio_venta;
        if ($id_impuesto == 1) {
            $gravado15 = $precioVenta / $valorImpuesto;
            $impuesto15 = $precioVenta - $gravado15;
            $impuesto18 = 0;
            $gravado18 = 0;
            $exento = 0;
            $exonerado = 0;
        }
        if ($id_impuesto == 2) {
            $gravado18 = $precioVenta / $valorImpuesto;
            $impuesto18 = $precioVenta - $gravado18;
            $impuesto15 = 0;
            $gravado15 = 0;
            $exento = 0;
            $exonerado = 0;
        }
        if ($id_impuesto == 3) {
            $impuesto18 = 0;
            $gravado18 = 0;
            $impuesto15 = 0;
            $gravado15 = 0;
            $exento = $precioVenta;
            $exonerado = 0;
        }
        if ($id_impuesto == 4) {
            $impuesto18 = 0;
            $gravado18 = 0;
            $impuesto15 = 0;
            $gravado15 = 0;
            $exento = 0;
            $exonerado = $precioVenta;
        }
        $stock = $request->stock;
        $valor = $stock * $precioVenta;

        $codigo = $request->codigo_producto;

        if (Producto::where('codigo_producto', $codigo)->exists()) {
            return redirect()->route('producto.index')->with('message', 'Producto NO guardado - Codigo de producto ya existe');
        }

        Producto::create([
            'codigo_producto' => $request->codigo_producto,
            'descripcion' => $request->descripcion,
            'id_categoria' => $request->id_categoria,
            'marca' => $request->marca,
            'size' => $request->size,
            'color' => $request->color,
            'id_proveedor' => $request->id_proveedor,
            'peso' => $request->peso,
            'stock' => $request->stock,
            'id_impuesto' => $request->id_impuesto,
            'gravado15' => number_format((float)$gravado15, 2, '.', ''),
            'gravado18' => number_format((float)$gravado18, 2, '.', ''),
            'impuesto15' => number_format((float)$impuesto15, 2, '.', ''),
            'impuesto18' => number_format((float)$impuesto18, 2, '.', ''),
            'exento' => number_format((float)$exento, 2, '.', ''),
            'exonerado' => number_format((float)$exonerado, 2, '.', ''),
            'costo' => $request->costo,
            'precio_venta' => $request->precio_venta,
            'precio_web' => $request->precio_web,
            'valor' => $request->valor,
            'id_estado_web' => 1,
            'id_estado' => 1,
            'id_usuario' =>  $id_usuario,
        ]);

        return redirect()->route('producto.index')->with('message', 'Producto agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $impuestos = Impuesto::where('id_estado', 1)->get();
        $categorias = ProductoCategoria::where('id_estado', 1)->get();
        $proveedores = Proveedor::where('id_estado', 1)->get();
        $data = Producto::findOrFail($id);

        return Inertia::render('producto/edit', compact('impuestos', 'categorias', 'proveedores', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id_usuario = Auth::id();
        $registro = now();
        $impuestoSeleccionado = $request->id_impuesto;
        $tipoImpuesto = Impuesto::find($impuestoSeleccionado);
        $id_impuesto = $tipoImpuesto->id;
        $valorImpuesto = $tipoImpuesto->valor;
        $precioVenta = $request->precio_venta;
        $categorias = $request->id_categoria;
        $id_categoria = $categorias["id"];

        if ($id_impuesto == 1) {
            $gravado15 = $precioVenta / $valorImpuesto;
            $impuesto15 = $precioVenta - $gravado15;
            $impuesto18 = 0;
            $gravado18 = 0;
            $exento = 0;
            $exonerado = 0;
        }

        if ($id_impuesto == 2) {
            $gravado18 = $precioVenta / $valorImpuesto;
            $impuesto18 = $precioVenta - $gravado18;
            $impuesto15 = 0;
            $gravado15 = 0;
            $exento = 0;
            $exonerado = 0;
        }

        if ($id_impuesto == 3) {
            $impuesto18 = 0;
            $gravado18 = 0;
            $impuesto15 = 0;
            $gravado15 = 0;
            $exento = $precioVenta;
            $exonerado = 0;
        }

        if ($id_impuesto == 4) {
            $impuesto18 = 0;
            $gravado18 = 0;
            $impuesto15 = 0;
            $gravado15 = 0;
            $exento = 0;
            $exonerado = $precioVenta;
        }

        $stock = $request->stock;
        $valor = $stock * $precioVenta;

        $producto = Producto::findOrFail($id);
        $producto->update([
            'codigo_producto' => $request->codigo_producto,
            'descripcion' => $request->descripcion,
            'id_categoria' => $id_categoria,
            'marca' => $request->marca,
            'size' => $request->size,
            'color' => $request->color,
            'id_proveedor' => $request->id_proveedor,
            'peso' => $request->peso,
            'stock' => $request->stock,
            'id_impuesto' => $request->id_impuesto,
            'gravado15' => number_format((float)$gravado15, 2, '.', ''),
            'gravado18' => number_format((float)$gravado18, 2, '.', ''),
            'impuesto15' => number_format((float)$impuesto15, 2, '.', ''),
            'impuesto18' => number_format((float)$impuesto18, 2, '.', ''),
            'exento' => number_format((float)$exento, 2, '.', ''),
            'exonerado' => number_format((float)$exonerado, 2, '.', ''),
            'costo' => $request->costo,
            'precio_venta' => $request->precio_venta,
            'precio_web' => $request->precio_web,
            'valor' => $request->valor,
            'id_estado_web' => 1,
            'id_estado' => 1,
            'id_usuario' =>  $id_usuario,
        ]);

        return redirect()->route('producto.index')->with('message', 'Producto actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->id_estado = 2;
        $producto->save();

        return redirect()->route('producto.index')->with('message', 'Producto eliminado con exito');
    }
}
