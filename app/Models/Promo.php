<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Promo extends Model
{

    protected $fillable = ['id', 'nama', 'harga', 'diskon'];

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public static function generatePromoId()
    {
        $last = DB::table('promos')
            ->where('id', 'like', 'PR%')
            ->orderByRaw("CAST(SUBSTRING(id, 3) AS UNSIGNED) DESC")
            ->first();

        if (!$last) {
            return 'PR1';
        }

        $lastIdNumber = (int) str_replace('PR', '', $last->id);
        $nextId = 'PR' . ($lastIdNumber + 1);

        return $nextId;
    }
}
