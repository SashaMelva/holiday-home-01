<?php

namespace App\Http\Middleware;

use App\Models\Agents;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AgentMiddlware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $agent = Agents::where('user_id', Auth::user()->id)->get();
        return count($agent) == 1 ? redirect()->route('agent.panel') : $next($request);
    }
}
