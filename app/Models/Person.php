<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Person extends Authenticatable
{
    use HasFactory;
    protected $table = 'persons';
    protected $guarded = [];
    protected $hidden = [
        'password', // Đảm bảo mật khẩu không bị lộ khi trả về dữ liệu
    ];
}
