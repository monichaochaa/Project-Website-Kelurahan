<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\Factories\HasFactory;


class AdminUser extends Authenticatable // Warisi dari Authenticatable, bukan Model
{
    use Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
    ];
}