<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['title'];

    public function skills()
    {
        return $this->hasMany(Skills::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
