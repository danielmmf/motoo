<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model {

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = ["name", "email", "cnh", "cpf", "rg", "sexo", "nascimento", "estado_civil", "perfil", "password", "company_id"];

    protected $dates = ["nascimento"];

    public static $rules = [
        "name" => "required",
        "email" => "required",
        "nascimento" => "date",
        "password" => "required,hidden",
        "company_id" => "required|numeric",
    ];

    public function addresses()
    {
        return $this->hasMany("App\Address");
    }

    public function Company()
    {
        return $this->belongsTo("App\Company");
    }


}
