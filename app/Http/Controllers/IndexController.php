<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function archivos()
    {
        return view('archivos');
    }

    public function usuarios()
    {
        return view('usuarios');
    }

    public function grupos()
    {
        return view('grupos');
    }

}
