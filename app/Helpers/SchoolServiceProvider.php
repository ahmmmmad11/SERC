<?php

namespace App\Helpers;

use App\Helpers\SchoolGuard;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;


class SchoolServiceProvider extends ServiceProvider {

    public function boot() {
        $this->configureGuard();
    }


    protected function configureGuard() {
        Auth::resolved(function ($auth) {
            $auth->extend('school', function ($app, $name, array $config) use ($auth) {
                return tap($this->createGuard($auth, $config), function ($guard) {
                    app()->refresh('request', $guard, 'setRequest');
                });
            });
        });
    }

    protected function createGuard($auth, $config) {
        return new SchoolGuard(request());
    }
}
