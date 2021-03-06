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

use App\Task;


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

// Route::get( '/task', function () {

// 	// $tasks = [

//  //     	'Go to the store',
//  //     	'Finish my screencast',
//  //     	'Clean the house'

//  //    ];
//  //    return view( 'tasks', compact( 'tasks' ) );


// 	$tasks = DB::table( 'tasks' )->latest()->get();
// 	// return $tasks;
// 	return view( 'tasks', compact( 'tasks' ) );

// } );

Route::get( '/task', 'TasksController@data' );

// Route::get( '/tasks', function () {

// 	// dd( $id );
// 	// $tasks = DB::table( 'tasks' )->latest()->get();
// 	// return view( 'task', compact( 'tasks' ) );

// 	// $task = DB::table( 'tasks' )->find( $id );
// 	// dd( $task );
// 	$tasks = Task::all();
// 	return view( 'tasks.index', compact( 'tasks' ) );

// } );

Route::get( '/tasks', 'TasksController@index' );

// Route::get( '/tasks/{id}', function ( $id ) {

// 	// dd( $id );
// 	// $tasks = DB::table( 'tasks' )->latest()->get();
// 	// return view( 'task', compact( 'tasks' ) );

// 	// $task = DB::table( 'tasks' )->find( $id );
// 	// dd( $task );
// 	$task = Task::find( $id );
// 	return view( 'tasks.show', compact( 'task' ) );

// } );

Route::get( '/tasks/{task}', 'TasksController@show' );

Route::get( '/posts', 'PostsController@index' );
Route::get( '/posts/{post}', 'PostsController@show' );
Route::get( '/posts/create', 'PostsController@create' );

Route::post( '/posts', 'PostsController@store' );