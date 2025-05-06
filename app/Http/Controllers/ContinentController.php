<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use Illuminate\Http\Request;

class ContinentController extends Controller
{
    public function index(Continent $continent)
    {
        return view('index')->with(['continents' => $continent->get()]);
    }
}
