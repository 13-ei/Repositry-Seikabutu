<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function getByContinent($continent_id)
    {
        $countries = Country::where('continent_id', $continent_id)->get();

        return response()->json($countries);
    }
}
