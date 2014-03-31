<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		// Include parent constructor
		parent::__construct();

		// Run an auth filter before all methods except index and show
		$this->beforeFilter('auth.basic', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::orderBy('created_at', 'desc')->paginate(2);
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
				$post->title = Input::get('title');
				$post->body = Input::get('body');
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
				$post->title = Input::get('title');
				$post->body = Input::get('body');
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
		Post::find($id)->delete();
		if (find($id)->delete()) {
			Session::flash('successMessage', 'Post Deleted Successfully');
			return Redirect::action('PostsController@index');			
		}
	}

}