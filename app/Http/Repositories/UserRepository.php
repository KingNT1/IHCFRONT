<?php

namespace App\Http\Repositories;

use DB;
use Validator;
use Exception;

class UserRepository
{
    /* Para usar $_SESSION: 
        1. editar en Kernel.php y en $routerMiddleware añadir: 
        'session' => \App\Http\Middleware\CustomSession::class
        2. Crear el archivo CustomSession.php en app/Middleware con el mismo contenido.
        3. En Providers/AppServiceProvider.php:
            - Añadir al inicio de todo: session_start([
                                            'cookie_lifetime' => 86400,
                                        ]);
            - Añadir los métodos boot() y composer() con su contenido.
        Después de esa config, se podrá usar en todas las vistas.
    */
    public function signin($request)
    {
        try {

            $email = trim($request->input('userEmail'));
            $password = trim($request->input('userPassword'));

            $response = DB::table('user')
                ->where('email', '=', $email)
                ->where('password', '=', $password)->get();

            if (sizeof($response) > 0) {
                $_SESSION['user_session'] = array(
                    "iduser" => $response[0]->iduser,
                    "name" => $response[0]->name,
                );

                return view('home')->with(['user' => $response[0]]);
            }else{
                
            }

        } catch (Exception $ex) {
            return response()->json(['message' => $ex->getMessage()], 500);
        }
    }
}
