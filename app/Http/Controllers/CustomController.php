<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class CustomController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index() {
        $string1 = "amanhã de manhã vai chover";
        $string2 = "manhã";

        $contains = Str::contains($string1, $string2);

        echo ($contains) ? "True" : "False";
    }

    function sumInterger() {
        $array = [1.23, 3.21, 4.7];

        $total = array_sum(
            collect($array)->map(function($item){
                return (int) $item;
            })->toArray()
        );

        echo $total;
    }

    function sumFixValue() {
        $array = [1.23, 3.21, 4.7];

        $finalResult = collect($array)->map(function($item){
            return $item + 3;
        })->toArray();

        dump($finalResult); 
    }

    function subtract() {
        $array = [1.23, 7.21, 4.7];

        $total = array_sum(
            collect($array)->map(function($item){
                return $item;
            })->toArray()
        );

        $result = $total - 10;

        echo ($result < 0) ? "0" : $result;
    }
}
