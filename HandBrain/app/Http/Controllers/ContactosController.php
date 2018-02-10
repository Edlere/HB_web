<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
class ContactosController extends Controller
{
  public function store(Request $request)
  {
    $contacto= new Contacto;
    $contacto->nombre=$request->input('nombre');
    $contacto->email=$request->input('email');
    $contacto->telefono=$request->input('telefono');
    $contacto->mensaje=$request->input('mensaje');
    $contacto->save();

    return 'Su mensaje ha sido enviado de forma satisfactotia,gracias        -Team HandBrain'
    //$contacto =Contacto::create($request->all());

  }
}
