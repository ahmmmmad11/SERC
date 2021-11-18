<?php

namespace App\Helpers;

use App\Models\School;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;


class SchoolGuard implements Guard {


    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function check() {
    }

    public function id() {
    }

    public function guest() {
    }

    public function validate(array $credentials = []) {
    }

    public function setUser(Authenticatable $user) {
    }

    /**
     * Get the currently authenticated user.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function user() {
        return School::where('api_key', $this->request->header('api-key'))->where('api_secret', $this->request->header('api-secret'))->first();
    }
}
