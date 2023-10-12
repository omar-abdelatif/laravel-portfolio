<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $table = 'information';
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address',
        'age',
        'img',
<<<<<<< HEAD
        'cv',
=======
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
        'facebook_link',
        'github_link',
        'whasapp_link',
        'linkedin_link'
    ];
}
