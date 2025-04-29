<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Perawatan extends Model
{
    protected $fillable = [
        'id',
        'nama',
        'deskripsi',
        'slug',
        'harga',
        'is_diskon',
        'diskon',
        'gambar'
    ];

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public static function generatePerawatanId()
    {
        $last = DB::table('perawatans')
            ->where('id', 'like', 'P%')
            ->orderByRaw("CAST(SUBSTRING(id, 2) AS UNSIGNED) DESC")
            ->first();

        if (!$last) {
            return 'P1';
        }

        $lastIdNumber = (int) str_replace('P', '', $last->id);
        $nextId = 'P' . ($lastIdNumber + 1);

        return $nextId;
    }
}
