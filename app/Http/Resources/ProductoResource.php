<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ProductoCategoriaResource;

class ProductoResource extends JsonResource
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
            'codigo_producto' => $this->codigo_producto,
            'descripcion' => $this->descripcion,
            'id_categoria' => $this->whenLoaded('categoria', new ProductoCategoriaResource($this->categoria)),
            'categoria' => $this->whenLoaded('categoria', new ProductoCategoriaResource($this->categoria)),
            'marca' => $this->marca,
            'size' => $this->size,
            'color' => $this->color,
            'id_proveedor' => $this->whenLoaded('proveedor', new ProveedorResource($this->proveedor)),
            'proveedor' => $this->whenLoaded('proveedor', new ProveedorResource($this->proveedor)),
            'peso' => $this->peso,
            'stock' => $this->stock,
            'id_impuesto' => $this->id_impuesto,
            'gravado15' => $this->gravado15,
            'gravado18' => $this->gravado18,
            'impuesto15' => $this->impuesto15,
            'impuesto18' => $this->impuesto18,
            'exento' => $this->exento,
            'exonerado' => $this->exonerado,
            'costo' => $this->costo,
            'precio_venta' => $this->precio_venta,
            'precio_web' => $this->precio_web,
            'valor' => $this->valor,
            'id_estado_online' => $this->id_estado_online,
            'id_estado' => $this->id_estado,
            'id_usuario' => $this->id_usuario,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
