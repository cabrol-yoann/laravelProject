<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sauce extends Model
{
    use HasFactory;

    protected $primaryKey = 'SauceId';
    protected $fillabe = [
        'SauceId',
        'UserId',
        'Nom',
        'Fabricant',
        'Description',
        'IngredientPrincipale',
        'URL',
        'Puissance',
        'Likes',
        'Dislikes',
        'UserLikes',
        'UserDislikes'
    ];
    // timestamps = false
    public function UserId()
    {
        return $this->belongsTo(User::class, 'UserId');
    }
    public function UserLikes()
    {
        return $this->hasMany(Like::class, 'SauceId');
    }
    public function UserDislikes()
    {
        return $this->hasMany(Dislike::class, 'SauceId');
    }

}
