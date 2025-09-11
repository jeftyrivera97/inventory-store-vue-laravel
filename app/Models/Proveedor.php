<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proveedor extends Model
{
    use SoftDeletes;
    protected $table="proveedores";
    protected $primaryKey = 'id';
    protected $fillable = ['codigo_proveedor','descripcion','categoria','contacto','telefono','registro','updated','id_estado','id_usuario','id_empresa','created_at','updated_at'];

    public function productos(): HasMany
    {
        return $this->hasMany(Producto::class, 'id_proveedor', 'id');
    }

    public function estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class,'id_estado');
    }
}
