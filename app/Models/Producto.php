<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;
    protected $table="productos";
    protected $primaryKey = 'id';
    protected $fillable = ['codigo_producto','descripcion','id_categoria','marca','size','color','id_proveedor','peso','stock','id_impuesto','gravado15','gravado18','impuesto15',
    'impuesto18','exento','exonerado','costo','precio_venta','precio_web','valor','id_estado_online','id_estado','id_usuario','created_at','updated_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'id_usuario');
    }
    
    public function estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class,'id_estado');
    }

    public function impuesto(): BelongsTo
    {
        return $this->belongsTo(Impuesto::class,'id_impuesto');
    }
    
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(ProductoCategoria::class, 'id_categoria', 'id');
    }
    
    public function proveedor(): BelongsTo
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor', 'id');
    }
}
