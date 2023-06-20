<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table= 'products';

    protected $fillable= [
        'user_id',
        'category_id',
        'brand_id',
        'name',
        'detail',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class );
    }

    public function images()
    {
        return $this->morphMany(Image::class , 'imageable');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class , 'commentable');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }



}
