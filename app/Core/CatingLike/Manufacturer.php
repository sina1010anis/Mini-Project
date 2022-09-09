<?php

namespace App\Core\CatingLike;

use App\Models\url;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class Manufacturer
{
    public $code;
    public function Create()
    {
        $code = Arr::random(['a','b','c','d','e','f','g','h','i','j','k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u','v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E','F','G','H','I','J','K', 'L', 'M', 'N', 'O', 'P','Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z','0', '2', '3', '4', '5', '6', '7', '8', '9'] , 6);
        $this->code = $code[0].$code[1].$code[2].$code[3].$code[4].$code[5];
        return $this;
    }

    public function Insert(Request $request)
    {
        url::create([
            'url' =>  $request->link ,
            'short_code' => $this->code,
        ]);
    }
}
