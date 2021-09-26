<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Support\Facades\Log;

class FavoriteController extends Controller
{
    public function store($id)
    {
        // Log::debug($request);
        if(!auth()->user()){
            return redirect(route('login'));
        }
        $favorite = new Favorite();
        $favorite->user_id = auth()->id();
        $favorite->shop_id = $id;
        $favorite->save();

        return back();
    }
    public function destroy($id)
    {
        Favorite::where('shop_id',$id)->delete();
        
        return back();
    }
    
}
