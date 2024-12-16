<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('locale')) {
            $locale = session('locale');
            app()->setLocale($locale);

            // Debug: sessiya va o‘rnatilgan tilni ko‘rsating
            logger()->info('Sessiyadagi til: ' . $locale);
        } else {
            logger()->info('Sessiyada til mavjud emas.');
        }

        return $next($request);
    }
}
