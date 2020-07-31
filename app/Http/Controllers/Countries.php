<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Countries extends Controller
{
    //

    function list ()
    {
        $data = Http::get('https://restcountries.eu/rest/v2/all')->json();
        return view('countries', ['data'=>$data]);
    }

}
