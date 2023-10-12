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
<<<<<<< HEAD

=======
    
>>>>>>> 7a2b1b6ea08927ff26409929dafd2f9fb4874069
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
