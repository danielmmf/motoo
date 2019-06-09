<?php

namespace App\Http\Controllers;

class RoleController extends Controller
{
    public function api(){
    	header('Access-Control-Allow-Origin: *', false);  
        echo 'OK';
    }
    
    public function index(){
    	return $this->load_view('index');
    }
   
   	 public function driver(){
        return $this->load_view('home',array('nome'=>'vai_ler_esse_valor_sehabilitar essa funcao'));
    }
    
}
