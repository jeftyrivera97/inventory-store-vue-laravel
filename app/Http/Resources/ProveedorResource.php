<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProveedorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'codigo_proveedor' => $this->codigo_proveedor,
            'descripcion' => $this->descripcion,
            'categoria' => $this->categoria,
            'contacto' => $this->contacto,
            'telefono' => $this->telefono,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'id_estado' => $this->id_estado,
            'id_usuario' => $this->id_usuario,
        ];
    }
}
