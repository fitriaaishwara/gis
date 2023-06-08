<?php

namespace App\Http\Middleware;

use App\Constant;
use Closure;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Facades\JWTAuth as FacadesJWTAuth;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware extends BaseMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            $user = FacadesJWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return api_response(false, 401, error: [
                    "error_message" => "Invalid token"
                ], message: Constant::RESPONSE_MESSAGE_NOT_AUTHORIZED);
            } else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
                return api_response(false, 401, error: [
                    "error_message" => "Token expired"
                ], message: Constant::RESPONSE_MESSAGE_NOT_AUTHORIZED);
            } else {
                return api_response(false, 401, error: [
                    "error_message" => "Authorization token not found"
                ], message: Constant::RESPONSE_MESSAGE_NOT_AUTHORIZED);
            }
        }
        return $next($request);
    }
}
