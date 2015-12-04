<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Users extends Eloquent {
	protected $fillable = ['title'];
	public $timestamps = false;
}