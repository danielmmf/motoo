<?php 
namespace App\Classes;

class Manufacturer extends \App\Manufacturer{
    
    public function salvar($nome){
        
        if($existe = \App\Manufacturer::where('name',$nome)->first()){
              return $existe;
        }else{
             try {
                $fabricante = new \App\Manufacturer;
                $fabricante->name = $nome;
                $fabricante->save();
                return $fabricante;
            } catch (\Exception $e) {
                echo $e->getMessage();
                return false;
            } 
        }
        
    }
}


