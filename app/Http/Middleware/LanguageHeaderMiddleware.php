<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Language;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LanguageHeaderMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $languages = Language::getActive();

        $language = $request->getPreferredLanguage(
            $languages->pluck('id')->toArray(),
        );

        $language && app()->setLocale($language);

        return $next($request);
    }
}
