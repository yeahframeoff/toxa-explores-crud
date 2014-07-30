<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent /*implements UserInterface, RemindableInterface*/ {

	//use UserTrait, RemindableTrait;

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
	//protected $hidden = array('password', 'remember_token');

    /**
     * Model doesn't require info about create\update time,
     * so the related table doesn't have 'created_at' and 'updated_at' fields.
     *
     * @var string
     */
    public $timestamps = false;

    protected $fillable = ['login', 'password', 'first_name', 'last_name'];
    protected $guarded  = ['id'];

    public function posts()
    {
        return $this->hasMany('Post');
    }

}
