<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    protected $fillable = ["name", "cnpj", "desc", "email", "telefone", "nome_fantasia", "nome_juridica", "url"];

    protected $dates = [];

    public static $rules = [
        "name" => "required|min:3",
        "cnpj" => "required|min:3",
    ];

    public $timestamps = false;

    public function drivers()
    {
        return $this->hasMany("App\Driver");
    }

    public function cars()
    {
        return $this->hasMany("App\Car");
    }

    public function addresses()
    {
        return $this->hasMany("App\Address");
    }


}
