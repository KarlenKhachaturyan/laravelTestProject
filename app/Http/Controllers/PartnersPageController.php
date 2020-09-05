<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnersPageController extends Controller
{
    public function show(){
        $partners = [
            ['name' => 'Netflix', 'logo' => 'https://assets.brand.microsites.netflix.io/assets/df87ee0c-c4ea-11e7-8d40-066b49664af6_cm_800w.png?v=16'],
            ['name' => 'Uber', 'logo' => 'https://images.ctfassets.net/37l920h5or7f/1VR43iWEPnMkLPWY7QoI8T/ad3c0a10d67a9861d86fc3abbe341132/Uber-Asset-Logo-34.jpg?fm=jpg&q=70&w=1600'],
            ['name' => 'Yandex', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Yandex_logo_ru.svg/1024px-Yandex_logo_ru.svg.png']
        ];

        return view('partners', [
            'title'=> 'Our Partners',
            'data' => $partners
        ]);
    }

    public function changeLang(Request $request, $locale){
        app()->setLocale($locale);
        return view('partners');
    }
}
