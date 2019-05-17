<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $table = 'dishes'; // name of table in the database
    protected $guarded = ['id','dish_type_id', 'name', 'image', 'price', 'description', 'is_availabel']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use
     public function dish_types() {
    	return $this->hasMany('App\DishType', 'dish_type_id', 'id');
    }
}