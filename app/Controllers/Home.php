<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Colegio/Index');
    }
    public function Perfil()
    {
        return view('Colegio/Perfil');
    }
    public function espiritual()
    {
        return view('Colegio/Espiritual');
    }
    public function nosotros()
    {
        return view('Colegio/Nosotros');
    }public function contacto()
    {
        return view('Colegio/Contacto');
    }public function adm()
    {
        return view('Colegio/Admin');
    }public function propuesta()
    {
        return view('Colegio/Propuesta');
    }
}
