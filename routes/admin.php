<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;




Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest:web'])->group(function () {
        Route::view('/login', 'back.pages.auth.login')
            ->name('login');
        Route::view('/forgot-password', 'back.pages.auth.forgot')
            ->name('forgot-password');
        Route::get('/password/reset/{token}', [AdminController::class, 'ResetForm'])
            ->name('reset-form');
    });

    Route::middleware(['auth:web'])->group(function () {
        Route::get('/home', [AdminController::class, 'index'])->name('home');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
        Route::view('/profile', 'back.pages.profile')->name('profile');
        Route::post('/change-profile-picture', [AdminController::class, 'changeProfilePicture'])->name('change-profile-picture');

        Route::view('/settings', 'back.pages.settings')->name('settings');
        Route::post('/change-blog-logo', [AdminController::class, 'changeBlogLogo'])->name('change-blog-logo');
        Route::post('/change-blog-favicon', [AdminController::class, 'changeBlogFavicon'])->name('change-blog-favicon');
    });
});
