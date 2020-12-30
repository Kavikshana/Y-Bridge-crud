<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic_personnel extends Model
{
    use HasFactory;

    protected $table = 'academic_personnels';

    protected $fillable = [
        
        
        'password',
    ];

    protected $hidden = [
        'password'
        
    ];

}
