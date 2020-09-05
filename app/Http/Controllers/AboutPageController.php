<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function show(){
        $workers = [
            ['name' => 'Malika', 'surname' => 'Rau', 'age' => 24, 'position' => 'Global Directives Producer'],
            ['name' => 'Magdalena', 'surname' => 'Batz', 'age' => 28, 'position' => 'Senior Paradigm Associate'],
            ['name' => 'Vince', 'surname' => 'Frami', 'age' => 27, 'position' => 'Human Marketing Representative'],
            ['name' => 'Mina', 'surname' => 'Thiel', 'age' => 34, 'position' => 'Human Metrics Planner'],
            ['name' => 'Ahmad', 'surname' => 'Tromp', 'age' => 30, 'position' => 'Forward Security Director'],
        ];
        return view('about',[
            'title' => 'Our Staff',
            'data' => $workers
            ]);
    }

    public function changeLang(Request $request, $locale){
        app()->setLocale($locale);
        return view('about');
    }

}
