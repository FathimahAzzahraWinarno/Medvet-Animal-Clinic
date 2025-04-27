<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengelola extends Model
{
    use HasFactory;

    public static function generateId()
    {
        $lastPengelola = self::orderBy('id', 'desc')->first();

        if (!$lastPengelola) {
            $number = 1;
        } else {
            $lastId = $lastPengelola->id;
            $lastNumber = (int) str_replace('pg-', '', $lastId);
            $number = $lastNumber + 1;
        }

        return 'pg-' . $number;
    }
}
