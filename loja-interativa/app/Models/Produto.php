<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'fabricante',
        'categoria',
        'quantidade',
        'valorUnidade'
    ];

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
    public function fabricante() {
        return $this->belongsTo(Fabricante::class);
    }
}