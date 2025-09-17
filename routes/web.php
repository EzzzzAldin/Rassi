<?php

use App\Http\Controllers\AuctionController;
use App\Http\Controllers\CategoryController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

Route::get('/categories/{categoryId}/auctions', [AuctionController::class, 'index'])->name('auctions.index');

Route::get('/auctions/{auctionId}', [AuctionController::class, 'show'])->name('auctions.show');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__ . '/auth.php';

Route::get('/{page?}', function ($page = 'index') {
    $availablePages = ['index', 'aboutus', 'contact-us', 'terms'];

    if (! in_array($page, $availablePages)) {
        abort(404);
    }
    return view("pages.$page");
})->name('pages');
