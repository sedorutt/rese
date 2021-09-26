<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use App\Models\Favorite;
use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $books = Reserve::with('shop')->where('user_id',auth()->id())->get();

        $favorite = Favorite::with('shop')->where('user_id', auth()->id())->get();

        return view('mypage',compact('user','books','favorite'));
    }
}
