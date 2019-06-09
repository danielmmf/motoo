<?php

namespace App\Http\Controllers;

class DelValleController extends Controller
{
    public function index(){
        return view('delvalle/index');
    }


    public function registrar(){
        return view('delvalle/registrar');
    }

    public function registrar_dois(){
        return view('delvalle/registrar-segundo');
    }

    public function registrar_tres(){
        return view('delvalle/registrar-terceiro');
    }

    public function minha_pagina(){
        session_start();
        $cpf = $_SESSION['cpf'];
    
        try{
             $usuario = \App\User::where('cpf',$cpf)->first(); 
        }catch(\Exception $e){
            echo $e->getMessage();
            die();
        }
       
        return view('delvalle/minha_pagina', array("usuario"=>$usuario));
    }

    public function profile(){
        return view('delvalle/profile');
    }


    public function login(){
        return view('delvalle/login');
    }

    public function faq(){
        return view('delvalle/faq');
    }

    public function fale(){
        return view('delvalle/fale');
    }

    public function recuperar(){
        return view('delvalle/recuperar');
    } 

    public function validar_cpf(){
        session_start();
        $resposta['status'] = 0; 
        $resposta['usuario'] = array(); 
        if( $usuario = \App\User::where('cpf',$_POST['cpf'])->first()){
            $resposta['status'] = 1; 
            $resposta['usuario'] = $usuario; 
            $_SESSION['cpf'] = $_POST['cpf'];
            $_SESSION['nome'] = $usuario->nome;
            $_SESSION['manufacturer_id'] = $usuario->manufacturer_id;
            $_SESSION['perfil'] = $usuario->perfil;
 
            return response()->json($resposta);
        }else{
            return response()->json($resposta);
        }
    }


    public function registrar_segundo(){
        $dados_usuario = $_POST['usuario'];
        $dados_endereco = $_POST['endereco'];
        
        $usuario = \App\User::where('cpf',$dados_usuario['cpf'])->first(); 
        try{
            $usuario->nome = $dados_usuario['name'];
            $usuario->cpf = $dados_usuario['cpf'];
            $usuario->rg = $dados_usuario['rg']?:$usuario->rg;
            //$usuario->nascimento = $dados_usuario['nascimento']?:"";
            $usuario->perfil = $dados_usuario['perfil'];
            $usuario->sexo = $dados_usuario['sexo']?:"";
            $usuario->estado_civil = $dados_usuario['estado_civil']?:"";
            $usuario->email = $dados_usuario['email']?:"";
            $usuario->email_comercial = $dados_usuario['email_comercial']?:"";	
            $usuario->senha = $dados_usuario['senha']?:"";
                
            $usuario->save();
            
            $endereco = new \App\Address;
            
            $endereco->cep = $dados_endereco['cep'];
            $endereco->rua = $dados_endereco['rua'];
            $endereco->numero = $dados_endereco['numero'];
            $endereco->complemento = $dados_endereco['complemento'];
            $endereco->bairro = $dados_endereco['bairro'];
            $endereco->estado = $dados_endereco['estado'];
            $endereco->cidade = $dados_endereco['cidade'];
            $endereco->telefone = $dados_endereco['telefone'];
            $endereco->user_id = $usuario->id;
            $endereco->manufacturer_id = $usuario->manufacturer_id;
            
            $endereco->save();
            $resposta['status'] = 1;
            $resposta['percent'] = "50";
            return response()->json($resposta);
            
        }catch( \Exception $e){
            echo $e->getMessage();
        }
        
        
        
        
        //print_r($usuario);
    }
    
    public function registrar_terceiro(){
        session_start();
        //print_r($_POST);
        //print_r($_SESSION);
        
        if(strlen($_POST['nascimento_conjuge']) > 8 ){
            $exp = explode("/",$_POST['nascimento_conjuge']);
            $data = $exp[2] . "-" . $exp[1]  . "-" . $exp[0];
        }else{
            $data = "";
        }
        
        $usuario = \App\User::where('cpf',$_SESSION['cpf'])->first(); 
        
        try{
            $usuario->time_coracao = $_POST['time_coracao'] ?: "";
            $usuario->tamanho_camiseta = $_POST['tamanho_camiseta'] ?: "";
            $usuario->passaporte = $_POST['passaporte'] ?: "";
            $usuario->conjuge = $_POST['conjuge'] ?: "";
            $usuario->nascimento_conjuge = $data ?: "";
            $usuario->filhos = $_POST['filhos'] ?: "";
            $usuario->qtd_filhos = $_POST['qtd_filhos'] ?: "";
            $usuario->pet = $_POST['pet'] ?: "";
            $usuario->qtd_pets = $_POST['qtd_pets'] ?: "";
            $usuario->tipo_pet = $_POST['tipo_pet'] ?: "";
            $usuario->save();
            $resposta['status'] = 1;
            $resposta['percent'] = "100";
            return response()->json($resposta);
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
    }
    
    
    
    public function treinamentos(){
        
        $mes  = date("m");
       // print_r($mes);
        return view('delvalle/treinamentos');
    }  
    
    public function admin_treinamentos(){
        
        $perfis = array('promotor', 'vendedor', 'gerente');
        
        $mes  = date("m");
        $campanhas = \App\Campaign::all();

        foreach ($campanhas as $campanha) {
            echo $campanha->name;
            $quiz = \App\Quiz::all();
            foreach ($quiz as $q) {
                print_r($q->name);
            }
        }

        $laco = $mes+1;
        return view('delvalle/admin_treinamentos', array('mes'=>$mes , 'laco'=>$laco, 'perfis'=>$perfis));
    }
    
    public function cria_quiz(){
     /*   $campaign = new \App\Campaign;
        $campaign->name = '2018-01';
        $campaign->save();*/
        
        
        if(! $campaign = \App\Campaign::where('name','2018-01')->first()){
            $campaign->name = '2018-01';
            $campaign->save();
 
            echo 'aqui criou quiz';
        }
        
        $quiz = new \App\Quiz;
        $quiz->name = 'terceiro quiz';
        $quiz->campaign_id = $campaign->id;
        $quiz->save();
        
        
    }
    
    
      public function novo_quiz(){
          session_start();
     /*   $campaign = new \App\Campaign;
        $campaign->name = '2018-01';
        $campaign->save();*/
        
        print_r($_POST);
        print_r($_SESSION);
        die();
        
        if(! $campaign = \App\Campaign::where('name','2018-01')->first()){
            $campaign->name = '2018-01';
            $campaign->save();
 
            echo 'aqui criou quiz';
        }
        
        $quiz = new \App\Quiz;
        $quiz->name = 'terceiro quiz';
        $quiz->campaign_id = $campaign->id;
        $quiz->save();
        
        
    }
    
    public function novo_treinamento($mes){
        
        return view('delvalle/novo_treinamento');
    }

    public function cria_user(){
        
        //delvalle,gerente,primeirogerente,12345678, gerente@primeir.com,1231233123,abc123
        $funcionario = new \App\Classes\User;
        $funcionario->cadastrar_funcionario($usuario);
        print_r($funcionario);
    }
    
     public function bkp_cria_user(){
        $funcionario = new \App\Classes\User;
    
        $usuario['name'] = 'zezinho2';
        $usuario['cpf'] = '43545535535';
        $usuario['email'] = '19831131@email.com';
        $usuario['celular'] = '19831131@email.com';
        $usuario['perfil'] = 'g';
        $usuario['group_id'] = 1;
        $usuario['fabricante'] = 'delvalle';

        $funcionario->cadastrar_funcionario($usuario);
        print_r($funcionario);
    }

    public function testando(){
        $resposta['status'] = 0; 
        $resposta['usuario'] = array(); 
        if( $usuario = \App\User::where('cpf','12345')->first()){
            $resposta['status'] = 1; 
            $resposta['usuario'] = $usuario; 
            return response()->json($resposta);
        }else{
            return response()->json($resposta);
        }
    }

    //
    
    public function load_users(){
        $funcionario = new \App\Classes\User;

        if (($handle = fopen("storage/usuarios.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                $usuario['fabricante'] = $data[0];
                $usuario['name'] = $data[2];
                $usuario['cpf'] = $data[3];
                $usuario['email'] = $data[4];
                $usuario['celular'] = $data[5];
                $usuario['registro_empresa'] = $data[6];
                $usuario['perfil'] = 'g';
                $usuario['group_id'] = 1;
                $funcionario->cadastrar_funcionario($usuario);
            }
            fclose($handle);
        }
        
        print_r( \App\User::count() );
       
    }
    
        public function load_scores($score_file){
            try{
               $file = $score_file; 
            }catch(\Exception $e){
                echo $e->getMessage();
            }
            
            if (($handle = fopen("storage/".$file.".csv", "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                     if( $usuario = \App\User::where('cpf',$data[0])->first()){
                        $usuario->$file = $data[1]; 
                        $usuario->save(); 
                       echo 'salvou esse indice no cpf :'.$data[1].' - '.$data[0];
                    }else{
                        echo 'nao achamos o cpf listado '.$data[0];
                    }
                }
                fclose($handle);
            }else{
                echo 'nao achamos seu arquivo de volume';
            }
    }
    
    
}
