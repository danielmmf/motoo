<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = ["name", "email", "email_comercial", "cpf", "rg", "sexo", "nascimento", "estado_civil", "perfil", "password", "group_id"];

    protected $dates = ["nascimento"];

    public static $rules = [
        "name" => "required",
        "email" => "required",
        "cpf" => "required",
        "rg" => "required",
        "sexo" => "required",
        "nascimento" => "date",
        "estado_civil" => "required",
        "perfil" => "required",
        "password" => "required,hidden",
        "group_id" => "required|numeric",
    ];

    public function Addresses()
    {
        return $this->hasMany("App\Address");
    }

    public function Carts()
    {
        return $this->hasMany("App\Cart");
    }

    public function group()
    {
        return $this->belongsTo("App\Group");
    }


}
