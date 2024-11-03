<?php
namespace  App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class LocalizationMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->has('locale') && in_array($request->get('locale'), ['vi', 'en', 'cn'])) {
            $locale = $request->get('locale');
            Session::put('locale', $locale);
        } else {
            $locale = Session::get('locale', 'vi');
        }

        App::setLocale($locale);
        
        return $next($request);
    }
}
