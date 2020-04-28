@extends('layouts.app') @section('content')
<div id="headerwrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-2 mt">
				<h1>
					一緒にプレイする友達がいない？<br>今すぐログインして気軽にマッチに参加しよう！
				</h1>
			</div>
		</div>
		<!-- /row -->
		<div class="col-lg-8 col-lg-offset-2 mt">
			<div class="row">
					<a href="{{ url('/login') }}"><button type="button" class="btn btn-lg btn-primary">ログイン/新規登録する</button></a>
			</div>
		</div>
	</div>
	<!-- /container -->
</div>
<!-- /headerwrap -->

<div class="container">
	<div class="row mt">
		<div class="col-lg-8 col-lg-offset-4">
			<h3>いつでも仲間が見つかる</h3>
			<hr>
		</div>
	</div>
	<!-- /row -->

	<div class="row mt">
		<div class="col-lg-4 col-md-4 col-xs-12 desc">
			<img src="images/description1.jpg" alt="" />
			<div class="">
				<h4 class="">みんなに自己紹介をしよう</h4>
			</div>
			<p>プロフィール登録</p>
			<p class="lead">自分のプレイスタイルや好きなキャラクターを登録してみんなに自己紹介をしよう！</p>
		</div>
		<!-- col-lg-4 -->

		<div class="col-lg-4 col-md-4 col-xs-12 desc">
			<img src="images/description2.jpg" alt="" />
			<div class="">
				<h4 class="">仲間を探そう</h4>
			</div>
			<p>ユーザー検索機能</p>
			<p class="lead">色んな条件を指定してマッチするユーザーを検索して仲間を見つけよう！</p>
		</div>
		<!-- col-lg-4 -->

		<div class="col-lg-4 col-md-4 col-xs-12 desc">
			<img src="images/description2.jpg" alt="" />
			<div class="">
				<h4 class="">今すぐパーティーに参加（いつか実装）</h4>
			</div>
			<p>マッチ中の部屋を検索</p>
			<p class="lead">今すぐプレイできる人を募集、検索してパーティーに参加しよう！</p>
		</div>
		<!-- col-lg-4 -->

	</div>
	<!-- /row -->
</div>
<!-- /container -->

@endsection
