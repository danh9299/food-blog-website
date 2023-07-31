<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfException
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            // Thực hiện yêu cầu và chuyển tiếp nếu không có exception
            return $next($request);
        } catch (\Exception $e) {
            // Xử lý exception ở đây, trong trường hợp này chuyển hướng đến trang 404
            return response()->view('/404', [], 404);
        }
    }
}
