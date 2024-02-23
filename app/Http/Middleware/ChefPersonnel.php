<?php

namespace App\Http\Middleware;

use App\Enums\ProfilUserEnum;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ChefPersonnel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if ($user && $user->profil === ProfilUserEnum::chefpersonnel) {
            return $next($request);
        }
        return redirect()->route('admin_space');
    }
}
