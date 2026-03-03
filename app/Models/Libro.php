<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Libro extends Model
{
    protected $table = 'libros';
    
    protected $fillable = ['nombre', 'isbn', 'autor', 'editorial', 'id_categoria', 'estatus']; // Agregar estatus
    
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
}
