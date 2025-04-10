<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Impuesto extends Model
{
    use SoftDeletes;
    protected $table="impuestos";
    protected $primaryKey = 'id';



    public function estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class,'id_estado');
    }

    public function Producto(): HasMany
    {
        return $this->hasMany(Producto::class, 'id_impuesto');
    }
}
