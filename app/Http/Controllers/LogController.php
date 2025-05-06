<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Http\Requests\LogRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;



class LogController extends Controller
{
    public function show(Log $log)
    {
        return view('continents.log')->with(['log' => $log]);
    }

    public function store(Log $log, LogRequest $request)
    //Laravelのルーティングから呼ばれたときにブラウザやフォームから送信されたデータを $request で受け取り、新しい Log モデルのデータを保存している。
    {
        $input = $request['log'];
        $tourist_spot_photo = $request->file('tourist_spot_photo');
        $tourist_spot_photo_name = time() . '_' . $tourist_spot_photo->getClientOriginalName();
        $tourist_spot_photo_url = Storage::disk('dropbox')->put('images/' . $tourist_spot_photo_name, file_get_contents($tourist_spot_photo));
        $input['tourist_spot_photo'] = $tourist_spot_photo_url;

        $food_photo = $request->file('food_photo');
        $food_photo_name = time() . '_' . $food_photo->getClientOriginalName();
        $food_photo_url = Storage::disk('dropbox')->put('images/' . $food_photo_name, file_get_contents($food_photo));
        $input['food_photo'] = $food_photo_url;

        $hotel_photo = $request->file('hotel_photo');
        $hotel_photo_name = time() . '_' . $hotel_photo->getClientOriginalName();
        $hotel_photo_url = Storage::disk('dropbox')->put('images/' . $hotel_photo_name, file_get_contents($hotel_photo));
        $input['hotel_photo'] = $hotel_photo_url;

        $impressions_photo = $request->file('impressions_photo');
        $impressions_photo_name = time() . '_' . $impressions_photo->getClientOriginalName();
        $impressions_photo_url = Storage::disk('dropbox')->put('images/' . $impressions_photo_name, file_get_contents($impressions_photo));
        $input['impressions_photo'] = $impressions_photo_url;

        // フォームで <input name="log[title]" /> という形で送られてきたデータはlog というキーの中に配列として入ってくる。
        $input['user_id'] = Auth::id();
        $log->fill($input)->save();
        // log というキーの中に配列として入ってくる。
        // → モデルの $fillable プロパティに許可されたカラムだけが入る。
        // save() でデータベースに保存する。
        return redirect('/logs/' . $log->id);
    }
}
