<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users'; // name of table in the database
    protected $guarded = ['id','user_type_id', 'title_id', 'first_name', 'middle_name', 'last_name', 'user_name', 'DOB', 'password', 'address', 'email', 'phone', 'country_id', 'identification_type_id', 'information']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use

    public function userTypes() {
    	return $this->belongsTo('App\UserType', 'user_type_id', 'user_type_id');
    }

    public function countries() {
    	return $this->belongsTo('App\Country', 'country_id', 'country_id');
    }

    public function identificationTypes() {
    	return $this->belongsTo('App\IdentificationType', 'identification_type_id', 'identification_type_id');
    }
    
    public function titles() {
        return $this->belongsTo('App\Title', 'title_id', 'title_id');
    }

    public function bookings() {
        return $this->hasMany('App\Booking');
    }

    public function vip_cards() {
        return $this->hasOne('App\VIPCard');
    }

    public function companies() {
        return $this->belongsTo('App\Company');
    }

    public function bills() {
        return $this->hasMany('App\Bill');
    }
}
