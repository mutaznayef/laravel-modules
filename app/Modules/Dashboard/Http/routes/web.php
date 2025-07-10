<?php

use App\Modules\Dashboard\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('{locale}')->group(
    function () {
        Route::get('/', function () {
            return view('Dashboard::/landing');
        });

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


        // Authentication

        Route::get('/login', function () {
            return view('Dashboard::/pages/auth/login');
        })->name('login');

        Route::get('/register', function () {
            return view('Dashboard::/pages/auth/register');
        })->name('register');

        Route::get('/new-password', function () {
            return view('Dashboard::/pages/auth/new-password');
        })->name('new-password');

        Route::get('/reset-password', function () {
            return view('Dashboard::/pages/auth/reset-password');
        })->name('reset-password');

        Route::get('/two-factor', function () {
            return view('Dashboard::/pages/auth/two-factor');
        })->name('two-factor');

        // User Profile

        Route::prefix('/user-profile')->group(function () {

            Route::get('/overview', function () {
                return view('Dashboard::/pages.user-profile.overview');
            })->name('user-profile-overview');
        });
    }
);

Route::get('/error', function () {
    abort(500);
});
