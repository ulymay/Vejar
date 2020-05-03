<?php

namespace App;

use App\Category;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    //
    protected $fillable = [
        'nombre', 'descripcion',
    ];

    public function category()
{
    return $this->belongsTo(Category::class);
}
}
