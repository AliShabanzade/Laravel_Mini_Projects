<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Nette\Utils\Image;

class



User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     *
     *
     */
    protected $table= 'users';

    protected $fillable = [

        'name',
        'family',
        'mobile',
        'email',
        'password',
        'email_verified_at',
        'remember_token',



    ];


    public function image()
    {
        return $this->morphOne(Image::class , 'imageable');
    }

    public function products()
    {
        return $this->hasMany(Product::class );
    }


    public function comments()
    {
        return $this->morphMany(Comment::class , 'commentable');
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

//    public function images()
//    {
//        return $this->morphMany(Image::class,'imageable');
//    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
