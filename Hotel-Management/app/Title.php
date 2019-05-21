<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $table = 'titles'; // name of table in the database
    protected $guarded = ['id']; // fields in the table
    protected $fillable = ['label']; // fields in the table
    
    public $timestamps=true; // set timestamp, allow to use

    public function users(){ // ten model cua bang 
    	return $this->hasMany('App\User');
    }
}
