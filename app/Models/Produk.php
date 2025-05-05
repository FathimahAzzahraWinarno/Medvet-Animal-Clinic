<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['id', 'nama', 'deskripsi'];

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
