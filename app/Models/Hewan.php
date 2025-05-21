<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;

    protected $table = 'hewans';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'nama',
        'spesies',
        'jenis_kelamin',
        'ras',
    ];

        public function reservasis()
    {
        return $this->hasMany(Reservasi::class, 'id_hewan', 'id');
    }

}
