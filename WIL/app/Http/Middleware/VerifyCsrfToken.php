<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        
        '/WilWeb/Wil/public/html/prueba.html',
        '/WilWeb/Wil/public/html/alumno.html',
        '/WilWeb/Wil/public/html/personalS.html',
        '/WilWeb/Wil/public/html/personal.html',
        'enviaProyecto',
        'login',
        'registra',
        'cambiaHorario',
        '/getInfoUsuario',
        '/getAlumnos',
        '/getUsuarios',
        'cambiaProgreso',
        '/eliminaUsuario'
    ];

}
