<?php

namespace App\Http\Controllers;

use App\Http\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function signin(Request $request){
        return $this->userRepository->signin($request);
    }

    public function logout(){
        return $this->userRepository->logout();
    }

    public function getHome()
    {
        return $this->userRepository->getHome();
    }

    public function signinView()
    {
        return $this->userRepository->signinView();
    }

    public function registerView()
    {
        return $this->userRepository->registerView();
    }

    public function register(Request $request)
    {
        return $this->userRepository->register($request);
    }

}
