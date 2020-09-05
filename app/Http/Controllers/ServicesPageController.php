<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesPageController extends Controller
{
    public function show(){
        $url = 'https://www.youtube.com/embed/AIxY_Y9TGWI';
        return view('services',[
            'title' => 'Services',
            'url_data' => $url
        ]);
    }
    public function changeLang(Request $request, $locale){
        app()->setLocale($locale);
        return view('services');
    }
}
