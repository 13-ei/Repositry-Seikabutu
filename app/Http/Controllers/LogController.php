<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Continent;
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
        $adapter = Storage::disk('dropbox')->getAdapter();
        $client = $adapter->getClient();
        $settings = [
            'requested_visibility' => 'public',
        ];

        $input = $request['log'];
        $input['continent_id'] = $request->input('continent_id');
        $input['country_id'] = $request->input('log.country_id');

        $tourist_spot_photo = $request->file('tourist_spot_photo');
        $tourist_spot_photo_name = time() . '_' . $tourist_spot_photo->getClientOriginalName();
        Storage::disk('dropbox')->put('images/' . $tourist_spot_photo_name, file_get_contents($tourist_spot_photo));
        $tourist_spot_photo_url = $client->createSharedLinkWithSettings('/images/' . $tourist_spot_photo_name, $settings)["url"];
        $tourist_spot_photo_url = str_replace("dl=0", "raw=1", $tourist_spot_photo_url);
        $input['tourist_spot_photo'] = $tourist_spot_photo_url;

        $food_photo = $request->file('food_photo');
        $food_photo_name = time() . '_' . $food_photo->getClientOriginalName();
        Storage::disk('dropbox')->put('images/' . $food_photo_name, file_get_contents($food_photo));
        $food_photo_url = $client->createSharedLinkWithSettings('/images/' . $food_photo_name, $settings)["url"];
        $food_photo_url = str_replace("dl=0", "raw=1", $food_photo_url);
        $input['food_photo'] = $food_photo_url;

        $hotel_photo = $request->file('hotel_photo');
        $hotel_photo_name = time() . '_' . $hotel_photo->getClientOriginalName();
        Storage::disk('dropbox')->put('images/' . $hotel_photo_name, file_get_contents($hotel_photo));
        $hotel_photo_url = $client->createSharedLinkWithSettings('/images/' . $hotel_photo_name, $settings)["url"];
        $hotel_photo_url = str_replace("dl=0", "raw=1", $hotel_photo_url);
        $input['hotel_photo'] = $hotel_photo_url;

        $impressions_photo = $request->file('impressions_photo');
        $impressions_photo_name = time() . '_' . $impressions_photo->getClientOriginalName();
        Storage::disk('dropbox')->put('images/' . $impressions_photo_name, file_get_contents($impressions_photo));
        $impressions_photo_url = $client->createSharedLinkWithSettings('/images/' . $impressions_photo_name, $settings)["url"];
        $impressions_photo_url = str_replace("dl=0", "raw=1", $impressions_photo_url);
        $input['impressions_photo'] = $impressions_photo_url;

        // フォームで <input name="log[title]" /> という形で送られてきたデータはlog というキーの中に配列として入ってくる。
        $input['user_id'] = Auth::id();
        $log->fill($input)->save();
        // log というキーの中に配列として入ってくる。
        // → モデルの $fillable プロパティに許可されたカラムだけが入る。
        // save() でデータベースに保存する。
        return redirect('/logs/' . $log->id);
    }
    public function edit(Log $log)
    {
        $continents = Continent::all();
        return view('continents.edit')->with(['log' => $log,  'continents' => $continents,]);
    }
    public function update(LogRequest $request, Log $log)
    {
        $adapter = Storage::disk('dropbox')->getAdapter();
        $client = $adapter->getClient();
        $settings = [
            'requested_visibility' => 'public',
        ];

        $input = $request['log'];
        $input['continent_id'] = $request->input('continent_id');
        $input['country_id'] = $request->input('log.country_id');

        if ($request->hasFile('tourist_spot_photo')) {
            $photo = $request->file('tourist_spot_photo');
            $name = time() . '_' . $photo->getClientOriginalName();
            Storage::disk('dropbox')->put('images/' . $name, file_get_contents($photo));
            $url = $client->createSharedLinkWithSettings('/images/' . $name, $settings)["url"];
            $input['tourist_spot_photo'] = str_replace("dl=0", "raw=1", $url);
        }

        if ($request->hasFile('food_photo')) {
            $photo = $request->file('food_photo');
            $name = time() . '_' . $photo->getClientOriginalName();
            Storage::disk('dropbox')->put('images/' . $name, file_get_contents($photo));
            $url = $client->createSharedLinkWithSettings('/images/' . $name, $settings)["url"];
            $input['food_photo'] = str_replace("dl=0", "raw=1", $url);
        }

        if ($request->hasFile('hotel_photo')) {
            $photo = $request->file('hotel_photo');
            $name = time() . '_' . $photo->getClientOriginalName();
            Storage::disk('dropbox')->put('images/' . $name, file_get_contents($photo));
            $url = $client->createSharedLinkWithSettings('/images/' . $name, $settings)["url"];
            $input['hotel_photo'] = str_replace("dl=0", "raw=1", $url);
        }

        if ($request->hasFile('impressions_photo')) {
            $photo = $request->file('impressions_photo');
            $name = time() . '_' . $photo->getClientOriginalName();
            Storage::disk('dropbox')->put('images/' . $name, file_get_contents($photo));
            $url = $client->createSharedLinkWithSettings('/images/' . $name, $settings)["url"];
            $input['impressions_photo'] = str_replace("dl=0", "raw=1", $url);
        }

        $log->fill($input)->save();

        return redirect('/logs/' . $log->id);
    }

    public function continentList($continent_id)
    {
        // 大陸IDに基づいてログを取得
        $logs = Log::where('continent_id', $continent_id)->get();

        // 大陸名の取得（あれば）
        $continent = Continent::find($continent_id);

        return view('logs.continent', [
            'logs' => $logs,
            'continent' => $continent,
        ]);
    }
}
