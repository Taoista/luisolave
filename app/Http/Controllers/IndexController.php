<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;
use App\Models\Trabajos;
use App\Models\Estudios;



class IndexController extends Controller
{
    
    function index()
    {
        $skills = $this->get_skills();

        $trabajos = $this->get_trabajos();

        $estudios = $this->get_estudios();

        return view("inicio", compact('skills', 'trabajos', 'estudios'));
    }


    function get_skills()
    {
        return Skills::get();
    }

    function get_trabajos()
    {
        return Trabajos::get();
    }

    function get_estudios()
    {
        return Estudios::get();
    }

}
