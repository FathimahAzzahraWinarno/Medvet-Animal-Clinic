<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{

    public static function generateUserId()
    {
        $last = DB::table('users')
            ->where('id', 'like', 'usr-%')
            ->orderByRaw("CAST(SUBSTRING(id, 5) AS UNSIGNED) DESC")
            ->first();

        if (!$last) {
            return 'usr-1';
        }

        $lastIdNumber = (int) str_replace('usr-', '', $last->id);
        $nextId = 'usr-' . ($lastIdNumber + 1);

        return $nextId;
    }

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'alamat',
        'telepon',
        'tanggal_akun',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function reservasis()
    {
        return $this->hasMany(Reservasi::class, 'id_user');
    }
}
