<?php

namespace App;

use App\Nota;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public function notes(){
        return $this->hasMany(Nota::class);
    }

}
