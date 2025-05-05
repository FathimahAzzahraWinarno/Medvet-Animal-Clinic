<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    protected $fillable = ['id', 'nama', 'gambar', 'detail'];

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public static function generateProdukId()
    {
        $last = DB::table('produks')
            ->where('id', 'like', 'PD%')
            ->orderByRaw("CAST(SUBSTRING(id, 3) AS UNSIGNED) DESC")
            ->first();

        if (!$last) {
            return 'PD1';
        }

        $lastIdNumber = (int) str_replace('PD', '', $last->id);
        $nextId = 'PD' . ($lastIdNumber + 1);

        return $nextId;
    }
}
