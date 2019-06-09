<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = ["name", "street", "number", "zipcode", "city", "state", "phone", "user_id", "manufacturer_id", "company_id"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "street" => "required",
        "number" => "required",
        "zipcode" => "required",
        "city" => "required",
        "state" => "required",
        "user_id" => "required|numeric",
        "manufacturer_id" => "required|numeric",
        "company_id" => "required|numeric",
    ];

    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function manufacturer()
    {
        return $this->belongsTo("App\Manufacturer");
    }

    public function company()
    {
        return $this->belongsTo("App\Company");
    }


}
