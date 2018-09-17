<?php

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
use App\roomtype;

Route::get('/createreservation', function () {
    return view('/createreservation');
});

Route::get('/dataTamu', function () {
    return view('/dataTamu');
});

Route::get('/ContactHotel', function () {
    return view('ContactHotel');
})->name('contacthotel');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/register','AuthController@getRegister')->name('register');
Route::post('/register','AuthController@postRegister');


Route::get('/login','AuthController@getLogin')->name('login');
Route::post('/login','AuthController@postLogin');


Route::get('/home', function() {
    return view('home') ;
})->name('home');

Route::get('/logout','AuthController@logout')->name('logout');

Route::get('/dataTamu','ReservationController@')->name('dataTamu');
Route::post('/dataTamu','ReservationController@postRegister');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/showroomtype', 'roomTypeController@index')->name('showroomtype');

Auth::routes();

Route::get('/showroomavailable', 'roomavailablecontroller@index')->name('showroomavailable');

Auth::routes();

Route::get('/showalluser', 'userController@index')->name('showalluser');


Auth::routes();


Auth::routes();


//Route::post('')




Route::get('/reservasikamar', 'detailReservationController@index')->name('reservasikamar');
//Route::post('/deleterole')

Route::get('/generatenobooking', function() {
    return view('generatenobooking') ;
})->name('generatenobooking');

Route::get('/homepage', function() {
    return view('homepage') ;
})->name('homepage');


Route::get('/role/addrole/create','roleController@create')->name('role.create');
Route::post('/role','roleController@store')->name('role.store');
Route::delete('/role/{IdRole}','roleController@destroy')->name('role.destroy');
Route::get('/role/edit/{id}','roleController@edit')->name('role.edit');
Route::put('/role/update/{id}','roleController@update')->name('role.update');
Route::get('/role','roleController@afteradd')->name('role.afteradd');

Route::get('/role/showallrole', 'roleController@index')->name('role.showallrole');

Route::get('/paidservice/showallpaidservice', 'paidServiceController@showall')->name('showallpaidservice');
Route::get('/paidservice/addpaidservice','paidServiceController@create')->name('paidservice.create');
Route::post('/paidservice/storepaidservice','paidServiceController@store')->name('paidservice.store');
Route::get('/paidservice/edit/{id}','paidServiceController@edit')->name('paidservice.edit');
Route::put('/paidservice/{id}','paidServiceController@update')->name('paidservice.update');
Route::delete('/paidservice/{IdPaidService}','paidServiceController@destroy')->name('paidservice.destroy');

Route::get('/season/showallseason', 'seasonController@showall')->name('showallseason');
Route::get('/season/addseason','seasonController@create')->name('season.create');
Route::post('/season/storeseason','seasonController@store')->name('season.store');
Route::get('/season/edit/{id}','seasonController@edit')->name('season.edit');
Route::put('/season/{id}','seasonController@update')->name('season.update');
Route::delete('/season/{IdSeason}','seasonController@destroy')->name('season.destroy');

Route::get('/price/showall', 'PriceController@showall')->name('showall');
Route::get('/price/showallprice', 'PriceController@showallprice')->name('showallprice');
Route::get('/price/addprice','PriceController@create')->name('price.create');
Route::post('/price/storeprice','PriceController@store')->name('price.store');
Route::get('/price/edit/{id}','PriceController@edit')->name('price.edit');
//Route::put('/price/{id}','PriceController@update');
Route::delete('/price/{IdPrice}','PriceController@destroy')->name('price.destroy');

Route::get('/roomtype/showall', 'TypeRoomController@showall')->name('showallroomtype');
Route::get('/roomtype/addroomtype','TypeRoomController@create')->name('roomtype.create');
Route::post('/roomtype/storeroomtype','TypeRoomController@store')->name('roomtype.store');
Route::get('/roomtype/edit/{id}','TypeRoomController@edit')->name('roomtype.edit');
Route::put('/roomtype/{id}','TypeRoomController@update')->name('roomtype.update');
Route::delete('/roomtype/{IdRoomType}','TypeRoomController@destroy')->name('roomtype.destroy');

Route::get('/reservasi','ReservasiController@index')->name('reservasi.index');
Route::get('/createreservation','ReservationController@create')->name('reservasi.create');
Route::post('/createreservation','ReservationController@store')->name('reservasi.store');

Route::get('/dataTamu','DataTamuController@postdataTamu')->name('getDataTamu');
Route::post('/dataTamu','DataTamuController@postdataTamu')->name('postdataTamu');

// Route::get('/reservasi/{reservasis}/edit', 'ReservasiController@edit')->name('reservasi.edit');
// Route::patch('/reservasi/{reservasis}/edit', 'ReservasiController@update')->name('reservasi.update');
// Route::delete('reservasi/{reservasis}/delete','ReservasiController@destroy')->name('reservasi.destroy');
// Route::patch('/reservasi/{reservasis}/batal', 'ReservasiController@updateStatus')->name('reservasi.updateStatus');


//<form action="/role/{{$d->IdRole}}/edit" method = "get">
Route::get('/showreciept1','recieptController@show');
Route::get('/showreciept/{idbooking}','recieptController@index');

Route::get('/showreportnewuser', 'Report@index')->name('showreportnewuser');
Route::get('/showallfaq','faqController@index')->name('showallfaq');


Route::get('/reportjeniskamar', 'ReportJenisKamarController@index')->name('reportjeniskamar');

Route::get('/reportpendapatantamu', 'ReportPendapatanJenisTamuController@index')->name('reportpendapatantamu');

Route::get('/reportpendapatancabang', 'ReportPendapatanCabangController@index')->name('reportpendapatancabang');

Route::get('/reportpesananterbanyak', 'ReportPesananTerbanyakController@index')->name('reportpesananterbanyak');
Auth::routes();


Route::get('/usersearch','userSearchController@index')->name('usersearch');
Route::get('/usersearch/action','userSearchController@action')->name('usersearch.action');
Route::get('/pembayaran','ReservationController@pembayaran')->name('pembayaran');





Auth::routes();
