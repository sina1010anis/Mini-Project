<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\ConnectException;


class Scraper extends Controller
{
    public function scraper_post(Request $request)
    {
        // Laravel 
        // $res = Http::get($request->url);
        // return redirect()->back()->with(['data' => $res->body()]);

        // PHP
        $ch = curl_init($request->url);
        //curl_setopt($ch, CURLOPT_USERAGENT,$_SERVER["HTTP_USER_AGENT"]);
        curl_setopt($ch, CURLOPT_USERAGENT , 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
        //return redirect()->back()->with(['data' => $request]);

    }

}
