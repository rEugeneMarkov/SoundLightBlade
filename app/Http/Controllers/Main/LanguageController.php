<?php

namespace App\Http\Controllers\Main;

use App\Models\Language;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function __invoke(Language $language)
    {
        abort_unless($language->active, 404);

        $cookie = cookie('language', $language->id, 365 * 24 * 60);

        return back()->withCookie($cookie);
    }
}
