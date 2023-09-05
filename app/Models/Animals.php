<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    use HasFactory;
    protected $table = "animales";

    protected $fillable = [
        'id',
        'nombre',
        'latin',
        'descripcion',
        'img',
        'idhabitat',
        'idespecie',
    ];

    public function especie()
    {
        return $this->belongsTo(Especie::class, 'idespecie');
    }


}
