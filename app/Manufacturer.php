<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model {

    protected $fillable = ["name", "desc", "cnpj", "url"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "cnpj" => "required",
    ];

    public function users()
    {
        return $this->hasMany("App\User");
    }

    public function addresses()
    {
        return $this->hasMany("App\Address");
    }


}
