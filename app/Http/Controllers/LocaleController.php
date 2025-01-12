<?php

namespace App\Http\Controllers;

use App;

class LocaleController extends Controller
{
    public function __invoke($locale)
    {
        $availLocale = (array)config('app.locales');

        if(array_key_exists($locale,$availLocale)){
            session()->put('locale',$locale);
            App::setLocale($locale);
        }
        return redirect()->back();

    }
}
