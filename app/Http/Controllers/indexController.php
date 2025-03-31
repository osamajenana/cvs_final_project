<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function resume_tamplate()
    {
        return view('resume_tamplate');
    }

    public function show_tamplate($id)
    {
        if ($id == 1) {
            return view('tamplates/template1');
        } elseif ($id == 2) {
            return view('tamplates/template2');
        } elseif ($id == 3) {
            return view('tamplates/template3');
        } elseif ($id == 4) {
            return view('tamplates/template4');
        }
    }
}
