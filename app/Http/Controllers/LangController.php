<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App;
class LangController extends Controller
{
    public function change($locale): RedirectResponse

    {

        App::setLocale($locale);

        session()->put('locale', $locale);



        return redirect()->back();

    }
}