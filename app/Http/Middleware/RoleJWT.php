<?php

namespace App\Http\Middleware;

use App\Constant;
use Closure;
use Illuminate\Http\Request;
use JWTAuth;

class RoleJWT
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {

        $user = JWTAuth::parseToken()->authenticate();

        foreach ($roles as $role) {
            if ($user->role == $role) {
                return $next($request);
            }
        }
        $error = [
            "error_message" => "Oops, kamu tidak punya otoritas untuk mengakses ini",
        ];
        return api_response(false, 401, null, $error, Constant::RESPONSE_MESSAGE_NOT_AUTHORIZED);
    }
}
