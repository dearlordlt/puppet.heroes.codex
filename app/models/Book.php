<?php

class Book extends Eloquent {

	protected $fillable = array('name', 'description');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'books';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('');
}
