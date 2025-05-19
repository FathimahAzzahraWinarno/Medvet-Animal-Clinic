<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengelola extends Authenticatable
{
        protected $table = 'pengelolas';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function rekamMedis()
    {
        return $this->hasMany(RekamMedis::class, 'id_pengelola');
    }
}
