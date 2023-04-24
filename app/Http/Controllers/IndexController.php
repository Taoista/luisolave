<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;



class IndexController extends Controller
{
    
    function index()
    {

        $skills = $this->get_skills();

        return view("inicio", compact('skills'));
    }


    function get_skills()
    {
        return Skills::get();
    }

}
