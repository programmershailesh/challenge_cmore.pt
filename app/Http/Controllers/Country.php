<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
// use PragmaRX\Countries\Package\Countries;

class Country extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // function loadCountry() {
    //     $countries = new Countries();

    //     echo $countries->where('cca2', 'IT')->first()->hydrateCurrencies()->currencies->EUR->coins->frequent->first();
        
    //     // or calling it statically
        
    //     echo Countries::where('cca2', 'IT')->first()->hydrateCurrencies()->currencies->EUR->coins->frequent->first();
    // }
}
