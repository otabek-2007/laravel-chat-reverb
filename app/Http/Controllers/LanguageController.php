<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
        $lang = $request->input('lang');

        if (in_array($lang, ['en', 'ru', 'uz'])) {
            session(['locale' => $lang]); // Sessiyada saqlash
            app()->setLocale($lang); // Laravel lokalini sozlash

            // dd(app()->getLocale('locale')); // Bu joyda sessiyadagi tilni tekshiramiz
        }

        return redirect()->back();
    }
}
