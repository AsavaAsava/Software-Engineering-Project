<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    public $timestamps = false;
    protected $table='roles';
    protected $fillable = [
        'role_id',
        'role_name',
    ];
}
