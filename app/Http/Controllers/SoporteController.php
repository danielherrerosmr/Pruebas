<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\Soporte;
use Illuminate\Support\Facades\Mail;

class SoporteController extends Controller
{
    //Este metodo se encarga de mostrar el formulario para enviar el correo
    public function index(){
        return view('contacto');
    }

    //Este metodo se encarga de procesar el formulario y enviar el correo
    public function store(Request $request){

         $request->validate([
             'nombre' => 'required',
             'email' => 'required|email',
             'mensaje' => 'required',
         ]);

        $correo = new Soporte($request->all());
        Mail::to('herrero.daniel.smr@gmail.com')->send($correo);
        return redirect()->route('soporte.index')->with('info', 'Mensaje enviado');
    }
}
