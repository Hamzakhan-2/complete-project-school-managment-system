<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    
    {
        if (auth()->check() && !auth()->user()->is_approved) {
            return redirect()->route('admin.approve.index')->with('warning', 'Your account is not yet approved by the admin.');
        }
    
        return $next($request);
        }

    }
    

