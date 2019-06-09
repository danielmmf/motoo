<?php

namespace App\Classes;


class User extends \App\User
{
    public function cadastrar_funcionario($dados){
        $usuario = new \App\User;
        
        $empresa = new \App\Classes\Manufacturer;
        $fabricante_salvo = $empresa->salvar($dados['fabricante']);
       
        if($existe = \App\User::where('cpf',$dados['cpf'])->first()){
              return $existe;
        }else{
            try {
                $usuario->nome = $dados['name'];
                $usuario->cpf = $dados['cpf'];
                $usuario->email = $dados['email'];
                $usuario->celular = $dados['celular'];
                $usuario->perfil = $dados['perfil'];
                $usuario->group_id = $dados['group_id'];
                $usuario->manufacturer_id = $fabricante_salvo->id;
                $usuario->registro_empresa = $dados['registro_empresa'];
                $usuario->save();
                return $usuario;
            } catch (\Exception $e) {
                echo $e->getMessage();
                return false;
            }
        }
    }
    
    public function cadastro_completo($dados){
        $usuario = new \App\User;

        try {
             $usuario->nome = $dados['name'];
            $usuario->cpf = $dados['cpf'];
            //$usuario->nascimento = $dados['nascimento'];
            //$usuario->rg = $dados['rg'];
            $usuario->email = $dados['email'];
            $usuario->celular = $dados['celular'];
            //$usuario->email_comercial = $dados['email_comercial'];
           // $usuario->sexo = $dados['sexo'];
           // $usuario->estado_civil = $dados['estado_civil'];
            $usuario->perfil = $dados['perfil'];
           // $usuario->senha = $dados['senha'];
            $usuario->group_id = $dados['group_id'];
            $usuario->manufacturer_id = $dados['manufacturer_id'];
          //  $usuario->time_coracao = 'custom';
          //  $usuario->tamanho_camiseta = 'custom';
          //  $usuario->passaporte = 0;
          //  $usuario->conjuge = 0;
            $usuario->save();
            return $usuario;
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }
}




