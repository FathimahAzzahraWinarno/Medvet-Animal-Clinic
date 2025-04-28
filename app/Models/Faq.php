<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['title', 'detail', 'id'];

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public static function generateId()
    {
        $lastFaq = self::latest('id')->first();
        $nextId = $lastFaq ? (intval($lastFaq->id) + 1) : 1;
        return 'F-' . $nextId;
    }
}
