<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasis';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'id_hewan',
        'id_user',
        'id_perawatan',
        'id_dokter',
        'id_promo',
        'hewan',
        'kelamin',
        'spesies',
        'perawatan',
        'tanggal',
        'waktu',
        'dokter',
        'pesan',
    ];

    public function hewan()
    {
        return $this->belongsTo(Hewan::class, 'id_hewan', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function perawatan()
    {
        return $this->belongsTo(Perawatan::class, 'id_perawatan', 'id');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter', 'id');
    }

    public static function generateReservasiId()
    {
        $last = DB::table('reservasis')
            ->where('id', 'like', 'R%')
            ->orderByRaw("CAST(SUBSTRING(id, 2) AS UNSIGNED) DESC")
            ->first();

        if (!$last) {
            return 'R1';
        }

        $lastIdNumber = (int) str_replace('R', '', $last->id);
        $nextId = 'R' . ($lastIdNumber + 1);

        return $nextId;
    }

    public function rekamMedis()
    {
        return $this->hasMany(RekamMedis::class, 'reservasi_id', 'id');
    }

    public function promo()
    {
        return $this->belongsTo(Promo::class, 'id_promo', 'id');
    }
}
