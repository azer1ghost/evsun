<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Localization
{
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('locale')) {
            App::setlocale(session()->get('locale'));
        }
        return $next($request);
    }

    public function locale(string $locale): RedirectResponse
    {
        if (!in_array($locale, config('voyager.multilingual.locales')))
        {
            abort(403);
        }

        App::setlocale($locale);
        session()->put('locale', $locale);
        return back();
    }
}
