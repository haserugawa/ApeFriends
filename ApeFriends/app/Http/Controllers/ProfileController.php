<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\M_character;
use App\M_play_style;
use App\M_play_time;
use App\M_weapon;
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
			$db_profile->name = $request->input ( 'name' );
			$db_profile->self_introduction = $request->input ( 'self_introduction' );

			if (! empty ( $request->input ( 'platform' ) )) {
				$db_profile->platform = $request->input ( 'platform' );
			}

			if (! empty ( $request->input ( 'play_time' ) )) {
				$db_profile->play_time = $request->input ( 'play_time' );
			}

			$db_user->save ();
			$db_profile->save ();
		} );
	}

	public function profile_search(Request $request) {
		$sql = <<< SQL
    SELECT
         `id`, `email`, `name`, `isset_profile_icon`, `self_introduction`, `platform`, `fav_weapon`, `main_character`, `play_time`, `play_style`, `created_at`, `updated_at`
	FROM `profiles`
	WHERE
SQL;

		$param = array();

		if($request->input ( 'us_platform' )){
			$sql .= " `platform` = ? AND ";
			array_push($param,$request->input ( 'us_platform' ));
		}

		if($request->input ( 'us_play_time' )){
			$sql .= " `play_time` = ? AND";
			array_push($param,$request->input ( 'us_play_time' ));
		}

		$sql .=" created_at IS NOT NULL ORDER BY created_at";

		$profiles = DB::select ($sql,$param);

		$m_weapons = M_weapon::all ();
		$m_characters = M_character::all ();
		$m_play_times = M_play_time::all ();
		$m_play_styles = M_play_style::all ();

		return view ( 'search_result', compact ( 'profiles', 'm_weapons', 'm_characters', 'm_play_times', 'm_play_styles' ) );
	}
}
