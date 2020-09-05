<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function show(){
        return view('home',[
            'title' => 'TCO',
        ]);
    }

    public function changeLang(Request $request, $locale){
        app()->setLocale($locale);
        return view('home');
    }
}
