<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'content',
        'genre_id',
        'area_id',
    ];

    public function favorite()
    {
        return $this->hasOne(Favorite::class,'shop_id','id');
    }
    public function reserves()
    {
        return $this->hasOne(Reserve::class,'id','shop_id');
    }
    public function genre()
    {
        return $this->hasOne(Genre::class ,'id','genre_id');
    }
    public function area()
    {
        return $this->hasOne(Area::class,'id','area_id');
    }

}
