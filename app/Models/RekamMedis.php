<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    public function rekamMedis()
    {
        return $this->belongsTo(Pengelola::class, 'id_pengelola');
    }
}
