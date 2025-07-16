<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProveedorResource;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tableHeaders = array(
            1 => "RTN Proveedor",
            2 => "Descripcion",
            3 => "Categoria",
            4 => "Contacto",
            5 => "Telefono",
        );

        $modulo = "Categorias";
        $contador = count(Proveedor::where('id_estado', 1)->get());
        $contador = "$contador Categorias en existencia";

        if ($request->has("query")) {
            $query =  $request->get("query");
            $data = ProveedorResource::collection(
                Proveedor::where('id_estado', 1)
                    ->where(function ($q) use ($query) {
                        $q->where("descripcion", "like", "$query%")
                            ->orWhere("codigo_proveedor", "like", "$query%")
                            ->orWhere("contacto", "like", "$query%");
                    })
                    ->paginate(50)
                    ->appends(['query' => $query])
            );
            return Inertia::render('proveedor/index', compact('data', 'contador', 'tableHeaders', 'modulo'));
        } else {

            $data = ProveedorResource::collection(Proveedor::where('id_estado', 1)->paginate(50));
            return Inertia::render('proveedor/index', compact('data', 'contador', 'tableHeaders', 'modulo'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('proveedor/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        try {
            $id_usuario = Auth::id();
            $registro = now();

            $codigo = $request->codigo_proveedor;

            if (Proveedor::where('codigo_proveedor', $codigo)->exists()) {
                return redirect()->route('proveedor.index')->with('message', 'Proveedor NO guardado - RTN ya existe');
            }

            Proveedor::create([
                'codigo_proveedor' => $request->codigo_proveedor,
                'descripcion' => $request->descripcion,
                'categoria' => $request->categoria,
                'contacto' => $request->contacto,
                'telefono' => $request->telefono,
                'id_estado' =>  1,
                'id_usuario' =>  $id_usuario,
            ]);

            return redirect()->route('proveedor.index')->with('message', 'Proveedor agregado con exito');
        } catch (\Throwable $th) {
            Log::error('Error al guardar el proveedor: ' . $th->getMessage());
            return redirect()->route('proveedor.index')->with('error', 'Error al guardar Proveedor: ' . $th->getMessage());
        }
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
        $data = Proveedor::findOrFail($id);
        return Inertia::render('proveedor/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        try {
            $id_usuario = Auth::id();
            $registro = now();

            $proveedor = Proveedor::findOrFail($id);
            $proveedor->update([
                'codigo_proveedor' => $request->codigo_proveedor,
                'descripcion' => $request->descripcion,
                'categoria' => $request->categoria,
                'contacto' => $request->contacto,
                'telefono' => $request->telefono,
                'id_usuario' =>  $id_usuario,
            ]);

            return redirect()->route('proveedor.index')->with('message', 'Proveedor actualizado con exito');
        } catch (\Throwable $th) {
            Log::error('Error al actualizar el proveedor: ' . $th->getMessage());
            return redirect()->route('proveedor.index')->with('error', 'Error al actualizar Proveedor: ' . $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $proveedor = Proveedor::findOrFail($id);
        $proveedor->id_estado = 2;
        $proveedor->save();

        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();

        return redirect()->route('proveedor.index')->with('message', 'Proveedor eliminado con exito');
    }
}
