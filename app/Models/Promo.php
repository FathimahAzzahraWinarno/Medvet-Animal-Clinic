<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Promo extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public static function generatePromoId()
    {
        $last = DB::table('promos')
            ->where('id', 'like', 'F%')
            ->orderByRaw("CAST(SUBSTRING(id, 2) AS UNSIGNED) DESC")
            ->first();

        if (!$last) {
            return 'PR1';
        }

        $lastIdNumber = (int) str_replace('PR', '', $last->id);
        $nextId = 'PR' . ($lastIdNumber + 3);

        return $nextId;
    }
}
