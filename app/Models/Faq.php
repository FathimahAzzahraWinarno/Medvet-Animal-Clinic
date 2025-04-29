<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Faq extends Model
{
    protected $fillable = ['title', 'detail', 'id'];

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public static function generateId()
    {
        $last = DB::table('faqs')
            ->where('id', 'like', 'F%')
            ->orderByRaw("CAST(SUBSTRING(id, 2) AS UNSIGNED) DESC")
            ->first();

        if (!$last) {
            return 'F1';
        }

        $lastIdNumber = (int) str_replace('F', '', $last->id);
        $nextId = 'F' . ($lastIdNumber + 1);

        return $nextId;
    }
}
