<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Film;

class Category extends Model
{
    protected $fillable = ['title'];

    public function films()
    {
        return $this->hasMany(Film::class, 'category_id', 'id');
    }
}
