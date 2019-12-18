<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
class SmsController extends Controller
{
    //

public function index(){

    $proyectos = Proyecto::where('fechadefensa','=', date('Y-m-d'))
    
    ->get();

    return view('smslist.index', compact('proyectos'));


}

public function sms(){
  

    $sid = env( 'TWILIO_SID' );
$token = env( 'TWILIO_TOKEN' );
$client = new Client($sid, $token);

    $numeros = Proyecto::where('fechadefensa','=', date('Y-m-d'))
    
    ->get();
$count = 0;
    foreach ($numeros as $key) {
    
$hora = date('H:i', strtotime($key->hora ));
$lugars = $key->lugar->aula;
$lugar2 = $key->lugar->lugar;
foreach ($key->docente_proyectos as $key2) {
   
    $count++;
   $numerito ='+591'.$key2->docente->persona->telefono; 
   $nombrecito = $key2->docente->persona->nombre; 
   $apellido= $key2->docente->persona->apellidop;
    $client->messages->create(
        // the number you'd like to send the message to
       $numerito,
        array(
            // A Twilio phone number you purchased at twilio.com/console
            'from' => env( 'TWILIO_FROM' ),
            // the body of the text message you'd like to send
            'body' => 'Buenos dias'.' '.$nombrecito.' '.''.$apellido.' '.'comunicarle que tiene una defensa publica a horas:'.' '.$hora.' '.'en'.' '.$lugars.'-'.$lugar2.'',
        )
    );



}

    }
    return back()->with( 'mensaje', $count . " mensajes enviados!" );

   // return $numeros->all();
// Required if your environment does not handle autoloading


// 2019-12-24 Use the REST API Client to make requests to the Twilio REST API


// Your Account SID and Auth Token from twilio.com/console


// Use the client to do fun stuff like send text messages!





}

}
