<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['nama', 'email', 'pesan'];

    public function user()
    {

        return $this->belongsTo(User::class, 'id_user');
    }
}
