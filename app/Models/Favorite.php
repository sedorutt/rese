<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shop_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id','user_id');
    }
    public function shop()
    {
        return $this->hasOne(Shop::class,'id','shop_id');
    }
    public function genre()
    {
        return $this->hasManyThrough(Genre::class, Shop::class,'genre_id','id');
    }
    public function area()
    {
        return $this->hasManyThrough(Area::class, Shop::class, 'area_id', 'id');
    }
}
