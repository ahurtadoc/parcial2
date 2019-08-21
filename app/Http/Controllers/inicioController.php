<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicioController extends Controller
{
    public function index($id=1)
    {
        if($id !== 'A765') {
            return '<script>
                           alert("zona prohibida");
                              
                      </script>';
        }
        else{
            return view('inicio');
        }

    }
}
