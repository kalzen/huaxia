<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{
    public function SetLocale($locale)
    {
        if (in_array($locale, ['en', 'vi', 'cn'])) {
            $currentLocale = Session::get('locale', 'vi');
            if ($currentLocale !== $locale) {
                Session::put('previous_locale', $currentLocale);
            }
            App::setLocale($locale);
            Session::put('locale', $locale);
        }
        return redirect()->back();
    }
}
