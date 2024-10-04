<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
         if(!Auth::guest()){
            $userRoles = Auth::user()->roles->pluck('name');
            if(!$userRoles->contains('admin')){
                return redirect()->route('admin.loginadmin')->with('permission', 'You do not have a permission!'); 
            }
            return $next($request);
        }else{
            return redirect()->route('admin.loginadmin')->with('permission', 'You do not have a permission!');
        }
    }
}
