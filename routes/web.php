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

// Route::get('/', 'PageController@index');
// Route::get('/mahasiswa', 'MahasiswaController@index');
// Route::get('/about', 'PageController@about');

// Route::get('/students', 'studentsController@index');


// Route::get('/students/create', 'studentsController@create');
// Route::post('/students', 'studentsController@store');


// Route::get('/students/{student}', 'studentsController@show');
// Route::delete('/students/{student}', 'studentsController@destroy');

// Route::get('/students/{student}/edit', 'studentsController@edit');
// Route::patch('students/{student}', 'studentsController@update');


Route::resource('students', 'studentsController');

// Route::get('/about', function () {
//     $nama = 'Luthfi';
//     return view('about', ['nama' => $nama]);
// });
// Route::get('/contacUs', function () {
//     return view('contacUs');
// });