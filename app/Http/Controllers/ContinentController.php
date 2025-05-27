<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Country;
use App\Models\Log;
use Illuminate\Http\Request;

class ContinentController extends Controller
{
    public function index(Continent $continent)
    {
        $continents = $continent->get();
        $countries = Country::all();
        return view('index', compact('continents', 'countries'));
    }


    public function show(Continent $continent)
    {
        $logs = $continent->logs()   //$logsによる投稿を取得
            ->orderBy('created_at', 'desc') //投稿作成日が新しい順に並べる
            ->paginate(10); //ページネーション
        return view('continents.show')->with(['continent' => $continent, 'logs' => $logs,]);
    }
}
