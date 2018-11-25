<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suscripcion;
use Mail;
use App\Mail\SendEmail;
class SuscripcionController extends Controller
{
    public function suscribir(Request $datos){
        $mensaje = " ";
        $this->validate($datos,[
            'email' => 'required'
        ]);
        $mensaje = $datos->email." mas cosas del correo";
        
        $dt = Suscripcion::where('email','=',$datos->email)->get()->first();
        if(count($dt) > '0'){
            $mensaje = "El correo electronico ya se encuentra registrado";
        }
        else{
            $dat = new Suscripcion;
            $dat->email = $datos->email;   
            $data = array($dat); 
            $dat->save();
            Mail::to($datos->email)->send(new SendEmail("Suscripción Biowell Bolivia"));
            $mensaje = "Suscripción correcta...";
        }
        return $mensaje;
    }
}
