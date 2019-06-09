<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model {

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = ["name", "desc", "published_at", "url", "category_id", "user_id"];

    protected $dates = ["published_at"];

    public static $rules = [
        "name" => "required",
        "published_at" => "date",
        "category_id" => "required|numeric",
        "user_id" => "required|numeric",
    ];

    public function category()
    {
        return $this->belongsTo("App\Category");
    }

    public function user()
    {
        return $this->belongsTo("App\User");
    }


}
