<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Flutter;

class ApiKeyValidate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->has("api_key")) {
            return response()->json([
              'status' => 401,
              'message' => 'Acceso no autorizado',
            ], 401);
          }

          if ($request->has("api_key")) {

            $flutter_token = Flutter::find(1)->access_token;

            $api_key = $flutter_token;
            if ($request->input("api_key") != $api_key) {
              return response()->json([
                'status' => 401,
                'message' => 'Acceso no autorizado',
              ], 401);
            }
          }

          return $next($request);
        }
    }

