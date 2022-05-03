<?php

namespace App\Http\Middleware;

use App\Facades\City\CityService;
use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Passport;

class BeforeLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->hasHeader('locale')) {
            $locale = $request->header('locale');
            if (!empty($locale)) {
                if (!is_null($locale) && array_key_exists($locale, config('app.locales'))) {
                    App::setLocale($locale);
                    config(['app.hasLocale' => true]);
                } else {
                    App::setLocale(config('app.fallback_locale'));
                    config(['app.hasLocale' => false]);
                }
                return $next($request);
            } else {
                App::setLocale(config('app.fallback_locale'));
                config(['app.hasLocale' => false]);
                return $next($request);
            }
        }
        if ($request->hasHeader('Authorization')) {
           Auth::check();
        }
        if($request->hasHeader('city_id')){
           $city =  CityService::getOne($request->header('city_id'));
            config(['app.city' => $city] );
            config(['app.city_id' => $request->header('city_id')] );
        }
        App::setLocale(config('app.fallback_locale'));
        config(['app.hasLocale' => false]);
        return $next($request);
    }
}
