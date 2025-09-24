<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;

class Film extends Model
{
    use SoftDeletes;
    protected $fillable = ['image', 'title', 'description', 'grade'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
