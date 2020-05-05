<?php

namespace App;

use App\Nota;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title'
    ];

    public function notes(){
        return $this->hasMany(Nota::class);
    }

}
