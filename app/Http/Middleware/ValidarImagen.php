<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidarImagen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $tipo_imagen = 'jpg';

        if($request->hasFile('photo_profile')){
            if($request->file('photo_profile')->extension() === $tipo_imagen){
                response('success', 200);
            } else {
                return redirect('/signup')->with('error', 'El tipo de imagen no es permitido (solo se permite JPG)');
            }
        }else{
            return redirect('/signup')->with('error', 'Coloca una imagen de perfil!! (solo se permite JPG)');
        }
        return $next($request);
    }
}
