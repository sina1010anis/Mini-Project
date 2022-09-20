<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \KMLaravel\GeographicalCalculator\Facade\GeoFacade;

class Example extends Controller
{
    public function example()
    {
        // $geo = GeoFacade::setPoint([22 , 30])->setPoint([68 , 19])->setPoint([35 , 49])->setOptions(['units' => ['km' , 'mile' , 'm']])->getDistance();
        // return $geo;

        $name = ['a' , 'b'];
        $search = function() use($name) {
            print_r($name);
        };
        return $search();
    }
}
