<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller {
    
	public function data () {

		$tasks = Task::latest()->get();
		return view( 'tasks', compact( 'tasks' ) );

	}

	public function index () {

		$tasks = Task::all();
		return view( 'tasks.index', compact( 'tasks' ) );

	}

	// public function show ( $id ) {

	// 	$task = Task::find( $id );
	// 	return view( 'tasks.show', compact( 'task' ) );

	// }

	public function show ( Task $task ) {

		// return $id;
		return view( 'tasks.show', compact( 'task' ) );

	}

}
