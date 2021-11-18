<?php

namespace App\Http\Middleware;

use App\Models\School;
use Closure;
use Illuminate\Http\Request;

class SchoolAPI {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        $school = School::where('api_key', $request->header('api-key'))->where('api_secret', $request->header('api-secret'))->first();
        if ($school) {
        }
        $request->school = $school;
        return $next($request);
    }
}
