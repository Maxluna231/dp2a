<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Papeleria extends Model
{
    use HasFactory;

    protected $fillable = [
        'Lapiceros',
        'libretas',
        'gomas',
        'hojas blancas',
        'hojas de colores',
        'precioDeCompra',
        'precioDeVenta',
        'disponible'
    ];
}
