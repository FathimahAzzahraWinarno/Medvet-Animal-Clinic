<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;

    protected $table = 'hewans';
    protected $fillable = [
        'nama',
        'spesies',
        'ras',
        'jenis_kelamin',
        'reservasi_id',
    ];

    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class, 'reservasi_id');
    }
}
