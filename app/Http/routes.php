<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});
/*Route::controller('show', 'DatatablesController', [
    'anyData'  => 'show.data',
    'getIndex' => 'show',
]);*/
Route::get('/show','DatatablesController@getIndex');
Route::get('/show/data','DatatablesController@anyData');

//Route::post('/help','Help@message');

Route::get('/data',function(){
    //if(Auth::user()->elev_id == 0)
    return view('data');
    //else{
     //   $this->data['elev'] = App\Elev::where('id',Auth::user()->elev_id)->get();
    //    return view('data_out',$this->data);
    //}
});
Route::get('/pdf/{id}','PdfController@index');
Route::post('/data','Data@index');
Route::auth();

Route::get('/home', 'HomeController@index');
