<?php

namespace App\Http\Controllers;

class CarnaDevController extends Controller
{
   
    public function index(){
        return view('carna-dev/index'); 
    }

    public function login(){
        return view('carna-dev/login');
    }
    
    public function registrar(){
        return view('carna-dev/registro');
    }

    public function registrar_usuario(){
        $response = array();
        if(filter_input(INPUT_POST,'password') == filter_input(INPUT_POST,'repeat_password')){
            $response['status'] = 1;
            $response['message'] = "Cadastrado com sucesso... Redirecionando.";
        }else{
            $response['status'] = 0;
            $response['message'] = "As senhas não são compativeis.";
        }
        print_r($response);
        return response()->json($response);
        print_r($_POST);
    }


}
