<?php

namespace App\Http\Controllers;

/**
 * Class LanguageController.
 */
class LanguageController extends Controller
{
    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function swap($lang)
    {
        session()->put('locale', $lang);

        return redirect()->back();
    }
}
