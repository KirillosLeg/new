<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input; 

class book extends Model
{

	protected $hidden = ['id'];

	protected $fillable =['title','author','year','description','image'];

	public function allBooks($type)
	{
		return self::oldest($type)->paginate(4);
	}

}
