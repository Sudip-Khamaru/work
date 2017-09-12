<?php

namespace App;

// Parent Class

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent {

	// protected $fillable = [ 'title', 'body' ];
	// protected $guarded = [ 'id' ];
	protected $guarded = [];
    
}
