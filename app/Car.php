<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model {

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = ["name", "desc", "modelo", "marca", "ano", "cor", "placa", "lotacao", "company_id"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "lotacao" => "numeric",
        "company_id" => "required|numeric",
    ];

    public function Company()
    {
        return $this->belongsTo("App\Company");
    }


}
