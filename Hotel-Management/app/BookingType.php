<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingType extends Model
{
    protected $table = 'booking_types'; // name of table in the database
    protected $guarded = ['id','label', 'online_plateform_id']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use
     public function online_plateforms() {
    	return $this->hasMany('App\OnlinePlateform', 'online_plateform_id', 'id');
    }
}