<?php

namespace App\Modules\Dashboard\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);

        if (!in_array($locale, config('app.locales'))) {

            abort(404, 'locale not supported');

            return redirect(url(getCurrentUrlWithLocale(config('app.fallback_locale'))));
        }

        App::setLocale($locale);
        session(['locale' => $locale]);
        return $next($request);
    }
}
