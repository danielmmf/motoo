<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class CoreController extends BaseController
{

    public static function pega_nome_view(){
        return  env('TEMPLATE_NAME', 'motoo');
    }
    
    public static function pega_nome_app(){
        return  env('APP_NAME', 'motoo');
    }

    public static function pega_nome_product(){
        return  env('PRODUCT_NAME', 'motoo');
    }
  
    public function index(){
        return $this->load_view('index', array('nome'=>'funcionou')); 
    }

    public function motoo(){
        return $this->load_view('motoo', array('nome'=>'funcionou')); 
    }

    public function usuario(){
        return $this->load_view('usuario', array('nome'=>'funcionou')); 
    }
    
    public function registrar(){
        return $this->load_view('registrar'); 
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
        //print_r($response);
        return response()->json($response);
        //print_r($_POST);
    }
    
  /*  public function home(){
        return $this->load_view('home', array('nome'=>'vai_ler_esse_valor_napagina'));
    }*/
    
     public function home(){
        return $this->load_view('home');
    }
    
    public function profile(){
       return $this->load_view('profile');
    }
    
     public static function load_view($partial, $dados=array()){
       // return view($this->view.'/profile');
       $arquivo = static::pega_nome_view();
       $config_array['nome_app']= static::pega_nome_app();
       $config_array['nome_product']= static::pega_nome_product();
       $config_array['template_folder']= $arquivo?:'motoo';
       $dados = array_merge($dados, $config_array);
       //$nome_app = \App\Http\Controllers\motooController::pega_nome_app();
        $view = '../resources/views/'.$config_array['template_folder'].'/'.$partial.'.php';
        if(file_exists($view)){
             return view($config_array['template_folder'].'/'.$partial, $dados);
        }else{
            return view('motoo/'.$partial, $dados);
        }
    }
}
