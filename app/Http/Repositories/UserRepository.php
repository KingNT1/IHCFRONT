<?php

namespace App\Http\Repositories;

use DB;
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

                return \redirect()->route('home')->with(['user' => $response[0]]);
            } else {
                return redirect()
                    ->route('user.signinView')
                    ->withErrors('Usuario y/o contraseña incorrecta')
                    ->withInput();
            }
        } catch (Exception $ex) {
            return response()->json(['message' => $ex->getMessage()], 500);
        }
    }

    public function logout()
    {
        unset($_SESSION['user_session']);
        $tournaments = DB::table('tournament')
            ->where('type', 1)
            ->get();
        return view('home')->with(['tournaments' => $tournaments]);
    }

    public function signinView()
    {
        if (array_key_exists('user_session', $_SESSION)) {
            return \redirect()->guest('/home');
        } else {
            return \view('home');
        }
    }

    public function getHome()
    {
        $tournaments = DB::table('tournament')
            ->where('type', 1)
            ->get();
        return view('home')->with(['tournaments' => $tournaments]);
    }

    public function registerView()
    {
        return view('register');
    }

    public function register($request)
    {
        try {
            $name = trim($request->input('userName'));
            $email = trim($request->input('userEmail'));
            $phone = trim($request->input('userPhone'));
            $password = trim($request->input('userPassword'));

            //Guardando el usuario
            DB::table('user')->insert(
                [
                    'email' => $email,
                    'password' => $password,
                    'phone' => $phone,
                    'name' => $name,
                ]
            );

            return \redirect()->route('home')->with(['message' => 'Usuario creado exitosamente, inicie
            sesión!']);
        } catch (Exception $ex) {
            return \back()->withErrors(['Error al registrarse.']);
        }
    }
}
