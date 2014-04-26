<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	const ROLE_ADMIN = 1;
	const ROLE_USER = 2;
	// public static $ROLES = array(
	// 	array('id' => 1, 'name' => 'Administrator'),
	// 	array('id' => 2, 'name' => 'User'),
	// );

	// Relationship for user has many posts.
	public function posts()
	{
	    return $this->hasMany('Post');
	}

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}
 
	/* Mutator to set user email to lowercase
	*/
	public function setEmailAttribute($value)
	{
	    $this->attributes['email'] = strtolower($value);
	}

	/* Mutator to hash all passwords
	*/
	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}

	public function getRememberToken()
	{
	    return $this->remember_token;
	}

	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
	    return 'remember_token';
	}

}