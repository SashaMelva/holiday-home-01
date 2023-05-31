<?php

namespace App\Http\Middleware;


use App\Models\LoginHistory;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckLoginHistory
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        LoginHistory::create([
            'user_id' => Auth::user()->id,
            'time_login' => date("Y-m-d H:i:s")
        ]);

        return $next($request);
    }
}
