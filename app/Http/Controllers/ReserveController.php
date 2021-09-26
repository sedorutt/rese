<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;

class ReserveController extends Controller
{
    public function store($id, Request $request)
    {
        // Log::debug($request);
        if (!auth()->user()) {
            return redirect(route('login'));
        } else {
            $reserve = new Reserve();
            $reserve->user_id = auth()->id();
            $reserve->shop_id = $id;
            $reserve->reserved_date = date('y-m-d', strtotime($request->reserved_date));
            $reserve->reserved_time = date('H:i', strtotime($request->reserved_time));
            $reserve->number = $request->number;
            $reserve->save();

            return view('done');
        }
    }
    public function destroy($id)
    {
        Reserve::where('id',$id) -> delete();

        return redirect(route('mypage'));
    }
}
