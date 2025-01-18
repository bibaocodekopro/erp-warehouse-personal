<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginMiddleware
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
        // Kiểm tra nếu người dùng chưa đăng nhập
        if (!auth()->check()) {
            return redirect('/login')->with('error', 'Bạn cần đăng nhập để truy cập.');
        }

        return $next($request);
    }
}
