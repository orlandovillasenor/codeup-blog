<?php

class Role extends BaseModel {

    protected $table = 'roles';


    /**
    * Rules for post validation
    */
    public static $rules = array(
    'role'      => 'required|max:10',
);

public function user()
{
return $this->belongsTo('User');
}

}