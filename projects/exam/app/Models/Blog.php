<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table='blogs';

    protected $fillable=[
        "user_id",
        "category_id",
        "name",
        "description",
        "body",
        "published",

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoryaaaaa()
    {
        return $this->belongsTo(Category::class , 'category_id' , 'id');
    }

    public function image(){
        return $this->morphOne( Image::class , 'imageable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class , 'commentable');
    }
}
