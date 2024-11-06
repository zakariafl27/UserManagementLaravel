<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // Add fields to the $fillable array
    protected $fillable = [
        'name',
        'email',
        'password',
        'description',
    ];


}
