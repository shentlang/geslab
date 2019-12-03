<?php

namespace App\Http\Controllers;

use App\Docente_proyecto;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //

   public function enviar($id){


      $message = Docente_proyecto::find($id);
      $correo = $message->docente->persona->email;
      
      Mail::to(($correo))->queue(new MessageReceived($message));
      return redirect()->route('notificaciones.notify')->with('mensaje', ' correo enviado exitosamente');

   }
}
