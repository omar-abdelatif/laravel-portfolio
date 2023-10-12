<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = [
        'author',
        'title',
        'content',
        'category',
        "img",
        "category_id"
    ];
    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
