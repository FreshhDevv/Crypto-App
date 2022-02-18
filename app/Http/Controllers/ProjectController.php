<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function getData(Request $request) {
       $response = Http::get("https://api.nomics.com/v1/currencies/ticker?key=535d0a02d9d31202c17a0206ba1f7dde072de74b&per-page=100&page=1");
        return view('index',['response'=>$response->json()]);
    }

    public function about(Request $request) {
        return view('about');
    }
}


https://api.nomics.com/v1/currencies/ticker?key=535d0a02d9d31202c17a0206ba1f7dde072de74b&ids=BTC,ETH,XRP&interval=1d,30d&convert=USD&platform-currency=ETH&per-page=100&page=1

