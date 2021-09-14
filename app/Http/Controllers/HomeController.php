<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //extend significa que agarra info de otro archivo
    //funciona para tener un orden 

    public function index()
    {
        $nombre = 'Jorge';

        return view('index')
        -> with('nombre' , $nombre);
    }

    public function detalle()
    {
        $nombre = 'Jorge';
        $apellido = 'Peña';
        $tel = '477 555 5555';
        $email = 'jorge.pena@werkn.mx';

        return view('detalle')
        -> with('nombre' , $nombre)
        -> with('apellido' , $apellido)
        -> with('tel' , $tel)
        -> with('email' , $email);
    }
}
