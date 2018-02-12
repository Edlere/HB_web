<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
class ContactoController extends Controller
{
    public function store(Request $request)
    {
    Contacto::create($request->all());

      return 'Su mensaje ha sido enviado con éxito,gracias                       -Team HandBrain ';
    }
}
