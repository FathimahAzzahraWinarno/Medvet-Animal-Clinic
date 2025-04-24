<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    public function hewan()
    {
        return $this->belongsTo(Hewan::class, 'id_hewan');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
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
