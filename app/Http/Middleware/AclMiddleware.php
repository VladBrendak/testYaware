<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AclMiddleware
{
    public function handle(Request $request, Closure $next, $section)
    {
        $user = Auth::user();
        $role = $user->role;

        if($role == null) {
            return redirect('/access-denied');
        }

        $acl = config('acl.roles');

        if (isset($acl[$role][$section]) && $acl[$role][$section]) {
            return $next($request);
        }

        return redirect('/access-denied');
    }
}
