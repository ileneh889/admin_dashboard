<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'admins';
    protected $primaryKey = 'admin_id';
    protected $fillable = [
        'admin_account',
        'admin_password',
        'admin_name',
        'admin_email',
        'last_login_time',
    ];
}