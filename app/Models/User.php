<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    public $timestamps = 'true';

    protected $casts = [
        'password' => 'string'
    ];

    protected $fillable = [
        
        'UserName',
        'password',
        
    ];
}
