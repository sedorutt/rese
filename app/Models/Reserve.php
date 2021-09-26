<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shop_id',
        'reserved_date',
        'reserved_time',
        'number'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function shop()
    {
        return $this->hasOne(Shop::class,'id','shop_id');
    }
}
