<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Verificamos que tenga perfil de ADMIN...
        if(!auth()->user()->admin)
        {
            return redirect('/');    
        }
        
        // En caso de cumplir las validaciones anteriores, 
        // redirecciona a la vistas permitidas para este ROLL
        return $next($request);
    }
}
