<?php

use Illuminate\Support\Facades\Route;
use NalyarUlryck\TwoFactorAuth\Http\Controllers\TwoFactorController;

Route::middleware(['web','auth'])->prefix('twofactor')->group(function () {
    Route::get('/enable-2fa', [TwoFactorController::class, 'enable2fa'])->name('enable2fa');
    Route::post('/verify-2fa', [TwoFactorController::class, 'verify2Fa'])->name('verify2fa');
    Route::get('/verify-2fa', [TwoFactorController::class, 'showVerify2Fa'])->name('verify-2fa');
});
