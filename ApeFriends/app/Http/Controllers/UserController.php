<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\User;

class UserController extends Controller {
	public function index(Request $request) {
		$user = User::all ();
		return view ( 'user.index', [
				'user' => $user
		] );
	}
	public function show(User $user) {
		return view ( 'users.show', [
				'user' => $user
		] );
	}
	public function update($email) {
		$user = user::find ( $emamil );

		return view ( 'user.update', compact ( 'user' ) );
	}
}
