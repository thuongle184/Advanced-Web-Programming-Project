<?php
use App\product;
use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});


Route::resources([
  'dishes'                =>  'DishController',
  'dishTypes'             =>  'DishTypeController',
  'bookingPurposes'       =>  'BookingPurposeController',
  'roomSizes'             =>  'RoomSizeController',
  'userTypes'             =>  'UserTypeController',
  'equipments'            =>  'EquipmentController',
  'titles'                =>  'TitleController',
  'onlinePlateforms'      =>  'OnlinePlateformController',
  'identificationTypes'   =>  'IdentificationTypeController',
  'countries'             =>  'CountryController'
]);


Route::patch('dishes/{dish}/discard_picture', 'DishController@discardPicture')->name('dishes.discardPicture');