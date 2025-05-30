<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RekamMedis extends Model
{
    use HasFactory;

    protected $table = 'rekam_medis';
    protected $primaryKey = 'id';
    public $incrementing = false; // karena pakai UUID
    protected $keyType = 'string';

    public static function generateRMId()
    {
        $last = DB::table('rekam_medis')
            ->where('id', 'like', 'RM%')
            ->orderByRaw("CAST(SUBSTRING(id, 3) AS UNSIGNED) DESC")
            ->first();

        if (!$last) {
            return 'RM1';
        }

        $lastIdNumber = (int) str_replace('RM', '', $last->id);
        $nextId = 'RM' . ($lastIdNumber + 1);

        return $nextId;
    }

    protected $fillable = [
        'id',
        'id_user',
        'id_pengelola',
        'reservasi_id',
        'nama_hewan',
        'tanggal',
        'dokter',
        'perawatan',
        'detail',
        'diagnosa',
        'hasil_tes',
        'tindakan',
        'pesan',
        'catatan',
    ];

    public function rekamMedis()
    {
        return $this->belongsTo(Pengelola::class, 'id_pengelola');
    }

    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class, 'reservasi_id');
    }
}
