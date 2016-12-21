<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index()
    {
      return "Estoy en el index";
    }

    public function create()
    {
      return "Esto seria el formulario para crear";
    }
}
