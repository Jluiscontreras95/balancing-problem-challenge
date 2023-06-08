<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Commons\Curl;

class ShortUrlController extends Controller
{
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'url' => 'required|url'
        ]);

        $url = $request->input('url');
        $api_url = 'https://tinyurl.com/api-create.php?url='.$url;
        $respuesta= (new Curl($api_url))->get(false, false);

        /**
         * Se puede hacer también de esta manera
         * 
         * $curl = new Curl($api_url);
         * $respuesta = $curl->get(false,false);
         *
         * return response()->json([
         *   'url' => $respuesta
         *  ]); 
         * 
         * return $respuesta;
         */

        return response()->json([
               'url' => $respuesta
            ]); 
    }
}
