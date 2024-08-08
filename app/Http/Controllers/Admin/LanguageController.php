<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Languages\SaveLanguageRequest;

class LanguageController extends Controller
{
    public function index()
    {
        return view('admin.language.index', [
            'languages' => Language::all()
        ]);
    }

    public function create()
    {
        return view('admin.language.create', [
            'language' => new Language(),
        ]);
    }

    public function store(SaveLanguageRequest $request)
    {
        $validated = $request->validated();

        Language::query()->create($validated);

        return to_route('admin.languages.index');
    }

    public function edit(Language $language)
    {
        return view('admin.language.edit', [
            'language' => $language
        ]);
    }

    public function update(SaveLanguageRequest $request, Language $language)
    {
        $validated = $request->validated();

        $language->update(array_merge($validated, [
            'active' => $validated['active'] ?? false,
            'default' => $validated['default'] ?? false,
            'fallback' => $validated['fallback'] ?? false,
        ]));

        return to_route('admin.languages.index');
    }

    public function destroy(Language $language)
    {
        $language->delete();

        return back();
    }
}
