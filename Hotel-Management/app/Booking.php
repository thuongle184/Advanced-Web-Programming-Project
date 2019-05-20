<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings'; // name of the table in the database
    protected $guarded = ['id','booking_type_id','user_id', 'room_id', 'entry_date', 'exit_date', 'booking_purpose_id']; // fields in the table
    public $timestamps=true; // set timestamp, allow to use

    public function booking_types() {
    	return $this->belongsTo('App\BookingType', 'booking_type_id', 'booking_type_id');
    }
    public function users() {
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function rooms() {
    	return $this->belongsTo('App\Room', 'room_id', 'room_id');
    }

    public function booking_purposes() {
    	return $this->belongsTo('App\BookingPurpose', 'booking_purpose_id', 'booking_purpose_id');
    }

    public function bills() {
        return $this->belongsTo('App\Bill', 'room_id', 'room_id');
    }
}
