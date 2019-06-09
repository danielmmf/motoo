<?php

namespace App\Http\Controllers;

class UbersController extends Controller
{
    public function driver(){
        return $this->load_view('home',array('nome'=>'vai_ler_esse_valor_sehabilitar essa funcao'));
    }

    public function company(){
        return view('uber/company_profile');
    }

    public function admin(){
        return view('uber/admin_profile');
    }

    public function driver_profile(){
        return view('uber/driver_profile');
    }

    public function driver_login(){
        return view('uber/driver_login');
    }

    public function admin_login(){
        return view('uber/admin_login');
    }
   
    public function mobilidade(){
        return view('uber/mobilidade');
    }
    
     public function nighter(){
        return view('uber/nighter');
    }
    
    public function geo(){
        return view('uber/geo');
    }

    public function reg_driver(){
        return view('uber/registrar_motorista');
    }

    public function company_login(){
        return view('uber/company_login');
    }

    public function test_driver(){
        try{
            $driver = new \App\Driver;
        
            $driver->name = 'nome';
            $driver->email = 'email';
            $driver->password = 'password';
            $driver->cnh = 'cnh';
            $driver->save();
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function save_driver(){
        try{
            $driver = new \App\Driver;
            $driver->name = $_POST['name'];
            $driver->email = $_POST['email'];
            $driver->password = md5($_POST['email']);
            $driver->company_id = $_POST['company_id'];
            $driver->cnh = $_POST['cnh'];
            $driver->save();
            $response['status'] = 1;
            $response['message']="Cadastrado com sucesso... Redirecionando.";
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
        return response()->json($response);
    }

     public function company_logar(){
        try{
            if($existe = \App\Company::where('cnpj',$_POST['cnpj'])->first()){
                $response['status'] = 1;
                $response['user_id']=$existe->id;
                $response['nome']=$existe->name;
            }else{
                $response['status'] = 0;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
        return response()->json($response);
    }
 public function admin_logar(){
        try{
            if($existe = \App\User::where('email',$_POST['email'])->first()){
                $response['status'] = 1;
                $response['user_id']=$existe->id;
                $response['nome']=$existe->name;
            }else{
                $response['status'] = 0;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
        return response()->json($response);
    }

    public function admin_companys(){
        $json = file_get_contents('php://input');
        return response()->json(\App\Company::all());
    }

    public function admin_drivers(){
        $json = file_get_contents('php://input');
        return response()->json(\App\Driver::all());
    }

    public function admin_cars(){
        $json = file_get_contents('php://input');
        return response()->json(\App\Car::all());
    }

 public function save_company(){
        @$nome = $_POST['name']?:'nome generico';
        @$cnpj = $_POST['cnpj']?:'cnpj generico';
        @$email = $_POST['email']?:'email generico';
        @$fantasia = $_POST['fantasia']?:'fantasia generico';
        @$juridica = $_POST['juridica']?:'juridica generico';
        @$telefone = $_POST['telefone']?:'telefone generico';
        
        try{
            $driver = new \App\Company;
            $driver->name = $nome;
            $driver->cnpj = $cnpj;
            $driver->email = $email;
            $driver->nome_fantasia = $fantasia;
            $driver->nome_juridica = $juridica;
            $driver->telefone = $telefone;
            $driver->url = 'url';
            $driver->save();
  
            $response['status'] = 1;
            $response['message']="Cadastrado com sucesso... Redirecionando.";
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
        return response()->json($response);
    }


    public function company_drivers(){
        $json = file_get_contents('php://input');
        $dados = json_decode($json);
        $existe = \App\Driver::where('company_id',$dados->company_id)->get();
         return response()->json($existe);
    }

    public function company_cars(){
        $json = file_get_contents('php://input');
        $dados = json_decode($json);

         $existe = \App\Car::where('company_id',$dados->company_id)->get();
         return response()->json($existe);
    }

    public function save_car(){
        try{
            $car = new \App\Car;
            $car->name = $_POST['modelo'];
            $car->company_id = $_POST['company_id'];
            $car->modelo = $_POST['modelo'];
            $car->ano = $_POST['ano'];
            $car->cor = $_POST['cor'];
            $car->placa = $_POST['placa'];
            $car->lotacao = $_POST['lotacao'];
            $car->marca = $_POST['marca'];
            $car->save();
            $response['status'] = 1;
            $response['message'] = "Cadastrado com sucesso...Redirecionando.";
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
        return response()->json($response);
    }

    public function company_criar(){
        print_r($_GET);
        @$nome = $_GET['nome']?:'nome generico';
        @$cnpj = $_GET['cnpj']?:'cnpj generico';
        
        try{
            $driver = new \App\Company;
            $driver->name = $nome;
            $driver->cnpj = $cnpj;
            $driver->desc = 'descricao';
            $driver->url = 'url';
            $driver->save();
        } catch (\Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }
    
    public function driver_logar(){
        if($existe = \App\Driver::where('cnh',$_POST['cnh'])->first()){
            $response['status'] = 1;
            $response['user_id']=$existe->id;
            $response['nome']=$existe->name;
        }else{
            $response['status'] = 0;
        }
        return response()->json($response);
    }
    
    public function home(){
        return $this->load_view('home',array('nome'=>'vai_ler_esse_valor_sehabilitar essa funcao'));
    }

    public function motorista(){
        return $this->load_view('geo',array('nome'=>'...'));
    }


    public function acha_motorista(){
        $cnh = str_replace("motorista-", "", $_POST['nome']);
        if($existe = \App\Driver::where('cnh',$cnh)->first()){
            $response['status'] = 1;
            $response['user_id']=$existe->id;
            $response['nome']=$existe->name;
        }else{
            $response['status'] = 0;
        }
        return response()->json($response);
    }
    
    public function solicitado(){
        return view('uber/solicitado_');
    }
    
}
