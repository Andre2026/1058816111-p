<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class personasmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $personas=\App\Models\user::count();
        $personasMayores=\App\Models\user::where
        ('fecha_nacimiento');'<'('2016-01-01')
        ->count;
            if($personas>10)
                 return $next($request);



    }
}
