<?php

namespace App\Http\Controllers;

use App\M_character;
use App\M_play_style;
use App\M_play_time;
use App\M_weapon;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware ( 'auth' );
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {
		$user = Auth::user ();
		$profile = Profile::firstOrCreate ( [
				'email' => $user->email
		] );
		$m_weapons = M_weapon::all ();
		$m_characters = M_character::all ();
		$m_play_times = M_play_time::all ();
		$m_play_styles = M_play_style::all ();

		return view ( 'home', compact ( 'user', 'profile', 'm_weapons', 'm_characters', 'm_play_times', 'm_play_styles' ) );
	}

}
