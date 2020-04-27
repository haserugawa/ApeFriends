<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\profile;

class ProfileController extends Controller {
	public function index(Request $request) {
		$profiles = profile::all ();
		return view ( 'profile.index', [
				'profile' => $profiles
		] );
	}
	public function show($userid) {
		$profile = profile::find ( $userid );
		return view ( 'profile.show', [
				'profile' => $profile
		] );
	}

	// プロフィール更新処理
	public function profile_update_job(Request $request) {
		// プロフィールの更新処理
		DB::transaction ( function () use ($request) {
			$email = Auth::user ()->email;
			$db_user = User::where ( 'email', $email )->first ();
			$db_profile = Profile::firstOrCreate ( [
					'email' => $email
			] );

			$db_user->name = $request->input ( 'name' );
			$db_profile->self_introduction = $request->input ( 'self_introduction' );
			$db_profile->platform = $request->input ( 'platform' );
			$db_profile->play_time = $request->input ( 'play_time');

			$db_user->save ();
			$db_profile->save ();
		} );
	}
}
