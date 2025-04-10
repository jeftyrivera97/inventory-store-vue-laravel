<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductoCategoriaResource;
use App\Models\ProductoCategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ProductoCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tableHeaders = array(
            1 => "Descripcion",
        );

        $modulo = "Categorias";
        $contador = count(ProductoCategoria::where('id_estado', 1)->get());
        $contador = "$contador Categorias en existencia";


        if ($request->has("query")) {
            $query =  $request->get("query");
            $data = ProductoCategoriaResource::collection(ProductoCategoria::where("descripcion", "like", "$query%")->where('id_estado',1)->paginate(50));
            return Inertia::render('categoria/index', compact('data', 'contador', 'tableHeaders','modulo'));
        } else {

            $data = ProductoCategoriaResource::collection(ProductoCategoria::where('id_estado',1)->paginate(50));
            return Inertia::render('categoria/index', compact('data', 'contador', 'tableHeaders','modulo'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('categoria/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id_usuario= Auth::id();
        $registro= now();

        $descripcion= $request->descripcion;

        if (ProductoCategoria::where('descripcion', $descripcion)->exists()) {
            return redirect()->route('categoria.index')->with('message','Categoria NO guardada - Descripcion ya existe');
         }

        ProductoCategoria::create([
            'descripcion' => $request->descripcion,
            'id_estado_web' => 1,
            'id_estado' => 1,
            'id_usuario' =>  $id_usuario,
          ]);

          return redirect()->route('categoria.index')->with('message','Categoria agregada con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ProductoCategoria::findOrFail($id);
        return Inertia::render('categoria/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id_usuario= Auth::id();
        $registro= now();

        $categoria= ProductoCategoria::findOrFail($id);
        $categoria-> update([
            'descripcion' => $request->descripcion,
            'id_usuario' =>  $id_usuario,
          ]);

          return redirect()->route('categoria.index')->with('message','Categoria actualizada con exito');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = ProductoCategoria::findOrFail($id);
        $categoria-> id_estado =2;
        $categoria->save();

        $categoria = ProductoCategoria::findOrFail($id);
        $categoria->delete();

        return redirect()->route('categoria.index')->with('message','Categoria eliminada con exito');
    }
}
