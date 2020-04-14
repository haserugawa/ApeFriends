<?php
/*------------------------
 //未使用
 * --------------*/
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Profile;

class ProfileProcess implements ShouldQueue {
	use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
	public $tries = 1; // リトライしない
	public $timeout = 0; // 実行時間無制限
	protected $user; // どのユーザーが対象か
	protected $name; // ユーザー名
	protected $profile; // 更新するプロフィール情報
	protected $db_profile; // DBで保存されているプロフィール情報

	/**
	 * Create a new job instance.
	 *
	 * @return void
	 */
	public function __construct($email, $name, $profile) {
		$this->user = $email;
		$this->user = $name;
		$this->profile = $profile;
	}

	/**
	 * Execute the job.
	 *
	 * @return void
	 */
	public function handle() {

		// profileの更新処理
		$db_profile = Profile::where ( 'id', Auth::user ()->userid );

		$db_profile->name = $profile->name;

		$db_profile->save ();
	}
}


