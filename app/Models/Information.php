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
        'cv',
        'facebook_link',
        'github_link',
        'whatsapp_link',
        'linkedin_link'
    ];
}
