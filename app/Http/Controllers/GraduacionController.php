<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\graduacion;
class GraduacionController extends Controller
{
  
    public function prueba()
    {   echo("aaa");
        $graduaciones=graduacion::All();
        dd($graduaciones);
    }
}
