<?php

class Post extends BaseModel {

	// Associates model with posts table in database
    protected $table = 'posts';

    // Define relationship to user (post author)
    public function user()
	{
	    return $this->belongsTo('User');
	}

    // Validation rules
    public static $rules = array(
	    'title'      => 'required|max:100',
	    'body'       => 'required|max:10000'
	);

	

}