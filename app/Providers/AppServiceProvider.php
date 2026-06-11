<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Fortify::authenticateUsing(function ($request) {
            $user = User::where('email', $request->email)->first();

            if ($user && Hash::check($request->password, $user->password)) {
                return $user;
            }
        });

        Fortify::redirects('register', function () {
            return '/login';
        });

        Fortify::redirects('login', function () {
            if (auth()->user()->hasRole('admin')) {
                return '/admin/dashboard';
            }
            return '/user/dashboard';
        });
    }
}