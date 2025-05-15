<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasis';
    protected $fillable = [
        'id_hewan',
        'id_user',
        'id_perawatan',
        'id_dokter',
        'hewan',
        'kelamin',
        'spesies',
        'perawatan',
        'tanggal',
        'waktu',
        'dokter',
        'pesan',
    ];

    public function hewans()
    {
        return $this->hasMany(Hewan::class, 'reservasi_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function perawatan()
    {
        return $this->belongsTo(Perawatan::class, 'id_perawatan');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }
}
