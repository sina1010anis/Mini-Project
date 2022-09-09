<?php

namespace App\Http\Controllers;

use App\Core\CatingLike\Manufacturer;
use App\Http\Requests\CatingLinkReuqst;
use App\Models\url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CatingLink extends Controller
{
    public function cating_link_post(CatingLinkReuqst $request , Manufacturer $manufacturer)
    {
        $manufacturer->Create()->Insert($request);
        return redirect()->back()->with(['link' => $manufacturer->code]);
    }
    public function search_link(CatingLinkReuqst $request)
    {
        $link = url::whereShortCode($request->link)->first();
        return route('send_link' , ['link' => $link->short_code]);
    }
    public function send_link(url $link)
    {
        return \redirect($link->url);
    }
}
