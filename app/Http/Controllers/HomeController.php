<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $searchArea = $request->input('searchArea');
        $searchGenre = $request->input('searchGenre');
        $searchKeyword = $request->input('searchKeyword');

        $query = Shop::query();

        $shops = Shop::with(['area', 'genre','favorite'])
            ->when(!empty($searchArea), function ($query) use ($searchArea) {
                return $query->where('area_id', $searchArea);
            })
            ->when(!empty($searchGenre), function ($query) use ($searchGenre) {
                return $query->where('genre_id', $searchGenre);
            })
            ->when(!empty($searchKeyword), function ($query) use ($searchKeyword) {
                return $query->where('name','like','%'.$searchKeyword. '%')->orwhere('content','like','%'.$searchKeyword. '%');
            })->get();

        return view('home' ,compact('shops'));
    }
    
}
