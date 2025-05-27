<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Log;

class CountryController extends Controller
{
    public function getByContinent($continent_id)
    {
        $countries = Country::where('continent_id', $continent_id)->get();

        return response()->json($countries);
    }

    public function searchForm(Country $country)
    {
        $countries = Country::all();
        return view('continents.search', compact('countries'));
    }

    public function search(Request $request)
    {
        $query = Log::query();

        if ($request->filled('country_id')) {
            $query->where('country_id', $request->country_id);
        }

        $logs = $query->orderBy('created_at', 'desc')->paginate(10);

        $countries = Country::all();

        return view('continents.search', compact('logs', 'countries'));
    }
}
