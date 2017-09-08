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

Route::get( '/', function () {
        
    // return view( 'welcome', [ 

    // 	'name' => 'Sudip',

    // 	'age' => 25,

    // ] );

    
    // return view( 'welcome' ) -> with( 'name', 'Apple' ) -> with( 'age', 25 );

    
    // $name = "Brandsoft";
    // return view( 'welcome', [ 'name' => $name, 'age' => 25 ] );


    $name = "Brandsoft";
    $age = 25;
    return view( 'welcome', compact( 'name', 'age' ) ); 

} );

Route::get( '/about', function () {

	return view( 'about' );

} );

Route::get( '/task', function () {

	$tasks = [

     	'Go to the store',
     	'Finish my screencast',
     	'Clean the house'

    ];
    return view( 'tasks', compact( 'tasks' ) );

} );