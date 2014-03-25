<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/blog', 'HomeController@showBlog');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/', 'HomeController@showWelcome');

Route::get('/sayhello/{name}', 'HomeController@sayHello');

Route::resource('posts', 'PostsController');

// Route::get('/rolldice/{guess}', function($guess)
// {
//    $random = rand(1, 6);
   
//    if ($random == $guess) {
//    		$message = "Good Guess!";	
//    } else {
//    		$message = "You Lose!";
//    }
   
//    $data = array('guess' => $guess, 'random' => $random, 'message' => $message);
   
//    return View::make('roll-dice')->with($data);
// });



