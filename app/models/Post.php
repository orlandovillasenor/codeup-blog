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

	public function delete_img()
	{
		File::delete(public_path() . "/" / $this->image_path);
		$this->image_path = null; 
	}

	public function renderBody($truncate = false)
    {
        // truncate the body if the option is passed
        $body = $truncate ? substr($this->body, 0, self::PREVIEW_LENGTH) . '...' : $this->body;

    // convert markdown to HTML
        $dirtyHTML = Parsedown::instance()->parse($body);

        // run result through HTMLPurifier
        $purifier = App::make('purifier');
    return $purifier->purify($dirtyHTML);
    }

}