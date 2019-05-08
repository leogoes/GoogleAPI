<?php

namespace App\Http\Controllers;

use function GuzzleHttp\json_decode;
use function GuzzleHttp\json_encode;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class GoogleController extends Controller
{
    public function jsonToPhp($json)
    {
        $results = json_encode($json, 15, 512);
        $results = json_decode($results, false, 512, 15);
        $jsonSize = sizeof($json);
        // dd($results[0]->created);
        return $results;
    }
}

// $jsonData = '[
//         {
//         "nome":"Jason Jones",
//         "idade":38,
//         "sexo": "M"
//         },
//     ' .
//     '{
//         "nome":"Ada Pascalina",
//         "idade":35,
//         "sexo": "F"
//     },'
//     .
//     '{
//         "nome":"Delphino da Silva",
//         "idade":26,
//         "sexo": "M"
//     }';

// $json = '{"empregados": ' .
//     $jsonData .
//     ']}';

// $url = $json; // path to your JSON file
// $results = json_decode($url); // decode the JSON feed

// return view('index', ['results' => $results]);
