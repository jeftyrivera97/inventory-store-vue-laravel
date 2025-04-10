<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductoCategoria extends Model
{
    use SoftDeletes;
    protected $table="producto_categorias";
    protected $primaryKey = 'id';
    protected $fillable = ['descripcion','nombre_imagen','ruta_imagen','registro','updated','id_estado','id_estado_web','id_usuario','created_at','updated_at'];

    public function producto(): HasMany
    {
        return $this->hasMany(ProductoCategoria::class, 'id_categoria', 'id');
    }

    public function estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class,'id_estado');
    }
}
