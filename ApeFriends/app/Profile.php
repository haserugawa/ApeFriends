<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	/**
	 * テーブルの主キー
	 *
	 * @var string
	 */
	protected $primaryKey = 'id';
	protected $fillable = ['email'];

}
