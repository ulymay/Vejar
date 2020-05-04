<?php

namespace App;

use App\Nota;

use Illuminate\Database\Eloquent\Model;

class Solucion extends Model
{
    public function nota()
    {
        return $this->belongsTo(Nota::class);
    }
}
