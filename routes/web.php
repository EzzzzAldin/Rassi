<?php

use App\Http\Controllers\AuctionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Livewire\Actions\Logout;
use App\Livewire\CreateAuctionWizard;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;

Route::get('/lang/{locale}', function ($locale) {
    abort_unless(in_array($locale, ['ar', 'en']), 404);
    Cookie::queue('locale', $locale, 60 * 24 * 30); // 30 days

    return back();
})->name('lang.switch');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/contact-us', [HomeController::class, 'contactus'])->name('contactus');
Route::post('/contact/submit', [HomeController::class, 'contactSubmit'])->name('contact.submit');
Route::get('/logout', Logout::class)->name('logout');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{categoryId}/auctions', [AuctionController::class, 'index'])->name('auctions.index');
Route::get('/auctions/create', CreateAuctionWizard::class)->name('auctions.create');
Route::get('/auctions/{auctionId}', [AuctionController::class, 'show'])->name('auctions.show');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile/{user}', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
