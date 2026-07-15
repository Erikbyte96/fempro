<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

use App\Models\Setting;
use App\Models\Hero;
use App\Models\Division;
use App\Models\Competency;
use App\Http\Controllers\ContactController;

Route::get('/', function () {

    App::setLocale(session('locale', 'hu'));

    $setting = Setting::first();

    $hero = Hero::first();

    $divisions = Division::with('items')
        ->orderBy('sort_order')
        ->get();

    $competencies = Competency::with('items')
        ->orderBy('sort_order')
        ->get();

    return view('welcome', compact(
        'setting',
        'hero',
        'divisions',
        'competencies'
    ));
});


Route::get('/language/{locale}', function ($locale) {

    if (! in_array($locale, ['hu', 'en'])) {
        abort(404);
    }

    session()->put('locale', $locale);

    return redirect()->back();

});

Route::get('/kapcsolat', [ContactController::class, 'index'])
    ->name('contact');