<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		// Include parent constructor
		parent::__construct();

		// Run an auth filter before all methods except index and show
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('search');
		$query = Post::with('user')->orderBy('created_at', 'desc');
		
		if (is_null($search))
		{
			$posts = $query->paginate(3);
		} else {
			$posts = $query->where('title', 'LIKE', "%{$search}%")
				->orWhere('body', 'LIKE', "%{$search}%")
				->paginate(3);
		}
		return View::make('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Log::info(Input::all());

		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);
		$filename = null;

		if (Input::hasFile('file'))
		{
			$file = Input::file('file');
	 
			$destinationPath = 'uploads';
			$filename = $file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension(); 
			$filename = str_random(12) . '.' . $extension;
			$uploadSuccess = Input::file('file')->move($destinationPath, $filename);
		}

	    // attempt validation
	    if ($validator->fails())
		    {
		        Session::flash('errorMessage', 'Post was not created - see form errors');
		        // validation failed, redirect to the post create page with validation errors and old inputs
		        return Redirect::back()->withInput()->withErrors($validator);
		    }
		    else
		    {
		    	
		        // validation succeeded, create and save the post
		        $post = new Post();
		        $post->user_id = Auth::user()->id;		
				$post->title = Input::get('title');
				$post->body = Input::get('body');
				$post->image_path = $filename;
				$post->save();
				Session::flash('successMessage', 'Post Created Successfully');
				return Redirect::action('PostsController@index');
		    }		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with('posts', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);
		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);
	    $filename = null;
	    
	    if (Input::hasFile('file'))
		{
			$file = Input::file('file');
	 
			$destinationPath = 'uploads';
			$filename = $file->getClientOriginalName();
			$extension = $file->getClientOriginalExtension(); 
			$filename = str_random(12) . '.' . $extension;
			$uploadSuccess = Input::file('file')->move($destinationPath, $filename);
		}
	    
	    // attempt validation
	    if ($validator->fails())
		    {
		        Session::flash('errorMessage', 'Post was not updated - see form errors');
		        // validation failed, redirect to the post create page with validation errors and old inputs
		        return Redirect::back()->withInput()->withErrors($validator);
		    }
		    else
		    {
		        // validation succeeded, create and save the post
		    	$post->user_id = Auth::user()->id;
				$post->title = Input::get('title');
				$post->body = Input::get('body');
				$post->image_path = $filename;
				$post->save();
				Session::flash('successMessage', 'Post Updated Successfully');
				return Redirect::action('PostsController@index');
		    }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$image = DB::table('posts')->where('id', '$id')->pluck('image_path');
		$post->delete();
		File::delete($image);
		Session::flash('successMessage', 'Post Deleted Successfully');
		return Redirect::action('PostsController@index');
		
	}

}