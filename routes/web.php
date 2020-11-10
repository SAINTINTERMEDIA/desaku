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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/', function () {
//     if (Auth::user()) {
//         return redirect('/home');
//     }
//     return view('welcome');
// }); 
// Route::group(['prefix'=>'data','middleware'=>'is_admin'], function(){

// });




Route::group(['middleware' => 'auth'], function () {

    // Route::prefix('1')->group(function(){
    //     Route::get('/adminhome', 'HomeController@adminhome')->name('adminhome', function () {
    //         if (Auth::user()->is_admin=='1') {
    //             return redirect('/adminhome');
    //         }else   if (Auth::user()->is_admin==1) {
    //             return redirect('/home');
    //         }
    //         return view('/adminhome');
    //         }); 
    // });

    Route::get('/home', 'ControllerFrontend@cek')->name('home')->middleware('is_admin');
    // Route::get('/adminhome', 'ControllerFrontend@cek')->name('home')->middleware('is_admin');
    Route::get('/back', 'ControllerFrontend@cek')->middleware('is_admin');
    
    //berita
    
    Route::get('/beritacreate', 'postsController@create')->middleware('is_admin');
    Route::get('/berita', 'postsController@databerita')->middleware('is_admin');
    Route::post('/uploadproses', 'postsController@proses_upload');

    //Mahasiswa
    Route::get('/mahasiswa', 'ControllerStudent@index');
    

        
    //familycard
    Route::get('/family', 'FamilycardController@index');
    Route::get('/familycari','FamilycardController@cari');
    Route::get('/familycreate','FamilycardController@create');
    Route::post('/family','FamilycardController@store');
    Route::get('/family/cetak_pdf','FamilycardController@cetak_pdf');

    Route::get('/family/familyedit/{id}', 'FamilycardController@edit');
    Route::put('/familyupdate/{id}', 'FamilycardController@update');
    Route::get('/family/hapus/{id}', 'FamilycardController@delete');

    //population
    Route::get('/population', 'FamilycardController@penduduk');
    Route::get('/population/cari','FamilycardController@caripenduduk');

    //suratsurat keterangan menikah
    Route::get('/surat','suratController@surattdkmampu');
    Route::get('/suratmenikah','formsuratController@belummenikah');
    Route::get('/suratmenikahdata','FamilycardController@skbmenikah');
    Route::post('/suratmenikahsimpan', 'formsuratController@store');
    Route::get('/suratmenikahcetak/{nik}','formsuratController@cetaksuratskbm');

    //surat domisili
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/suratketerangandomisili','formsuratController@suratketerangandomisili');
    Route::post('/suratdomisili','formsuratController@storeskdm');
    
    //surat kelakuan baik
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/suratkelakuanbaik','formsuratController@suratkelakuanbaik');
    Route::post('/suratskb','formsuratController@storeskb');

        //surat bersih diri
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/suratbersihdiri','formsuratController@suratbersihdiri');
    Route::post('/suratbersihdirisimpan','formsuratController@storesbd');


    //keterangantidak mampu
    Route::get('/sktmampu','formsuratController@sktmampu');
    Route::post('/sktmampusimpan', 'formsuratController@storesktmpu');
    Route::get('/suratmenikahcetak/{nik}','formsuratController@cetaksuratskbm');

    Route::get('/suratmenikahedit/{nik}','formsuratController@belummenikahedit');

    //USER     
    Route::get('/lihatuser','userController@index');
    

    //DEFNAKER
    Route::get('/defnakercreate','DefnakerController@create');
    
    
    
    
    //UPLOAD
    Route::get('/upload','uploadController@upload');
    Route::post('/upload/proses', 'UploadController@proses_upload');




});

// Frontend
Route::get('/', 'PostsController@hotnews');
Route::get('/beritana/{id}', 'PostsController@databerita1');
// Route::get('/familyedit/{id}', 'ControllerFrontend@index2');
Route::get('/pemerintah', 'ControllerFrontend@pemerintah');
Route::get('/bpd', 'ControllerFrontend@bpd');
Route::get('/visimisi', 'ControllerFrontend@visimisi');
Route::get('/lpm', 'ControllerFrontend@lpm');
Route::get('/defnaker', 'ControllerFrontend@defnaker');
Route::get('/pkk','ControllerFrontend@pkk');


// dsmvksldmvsd
//  DATATA
