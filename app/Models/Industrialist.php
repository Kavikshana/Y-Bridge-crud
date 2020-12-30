<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industrialist extends Model
{
    use HasFactory;

    protected $table = 'industrialists';

    protected $fillable = [

            'Photo',
            'CompanyPersonalEmailID',
            'NameWithInitials',
            'Designation',
            'LinkedIn',
            'FieldOfInterests',
            'ContactNumber',
            'UserName',
            'password',
    ];

    protected $hidden = [
        'password'
        
    ];

}
