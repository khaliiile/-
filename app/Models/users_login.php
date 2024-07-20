<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_login extends Model
{
    use HasFactory;
    protected $table = 'users_login';
    protected $fillable = [
        'full_name', 'email', 'password', 'role',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
