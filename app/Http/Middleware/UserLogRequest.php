<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\UserLog;
use Illuminate\Support\Facades\Auth;

class UserLogRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        $serverVariables = $request->server();

        $log_data = [
            'user_id' => Auth::user()->user_id ?? null,
            'ip_address' => $serverVariables['REMOTE_ADDR'],
            'session_id' => getmypid(),
            'action' => $serverVariables['REQUEST_METHOD']
        ];

        UserLog::create($log_data);

        return $response;
    }
}
