<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body'];

    /**if dont want to repeat other places. eager load always */
    // protected $with = ['category','author'];

    /** when not use id for route and use (Post $post) */
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
