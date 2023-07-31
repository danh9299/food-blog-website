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
    public function handle($request, Closure $next)
    {
        if (!$this->routeExists($request->getRequestUri())) {
            return response()->view('/404', [], 404);
        }

        return $next($request);
    }

    private function routeExists($uri)
    {
        $routes = app()->router->getRoutes()->getRoutes();

        foreach ($routes as $route) {
            if ($uri === $route->uri()) {
                return true;
            }
        }

        return false;
    }
}
