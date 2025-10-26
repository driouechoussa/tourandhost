<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class Locale extends Controller
{
        public function LangChanger($locale) {
        if (! in_array($locale , config('app.app_langs'))) {
            abort(404);
        }
        Session::put('locale', $locale);
        return redirect()->back();
    }

}
