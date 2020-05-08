<?php

namespace App;

use App\Category;

use App\Solucion;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    //
    protected $fillable = [
        'nombre', 'descripcion', 'category_id', 'solucion', 'recomendaciones', 'guia', 'relacionado'
    ];

    public function category()
{
    return $this->belongsTo(Category::class);
}

    public function solucion()
    {
        return $this->hasMany(Solucion::class);
    }

    public function scopeNombre($query, $nombre)
    {
        if($nombre){
            return $query->where('nombre', 'like', "%$nombre%");
        }
    }


}
