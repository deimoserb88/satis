<?php

namespace SATIS\Http\Controllers;

use Illuminate\Http\Request;
use User;
use SATIS\Http\Requests;

class UsersController extends Controller
{
	public function actualizapasswd(){

		DB::table('users')->update(['password'=>bcrypt('password')]);

		return "exito";

	}
}
