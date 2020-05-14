@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="card" id="profile_update">
				<a class="card-header" data-toggle="collapse" href="#profile-card-body" aria-expanded="true">
					<h1>検索結果一覧<span><i class="fas fa-angle-down"></i></span></h1>
				</a>
				<div class="card-body collapse show" id="profile-card-body">

				@if(!$profiles)
					<div class="row profiles">
						<p>ユーザーが見つかりませんでした。</p>
					</div>
				@endif
				@foreach($profiles as $profile)
				<div class="row profiles">
					<div class="col-4"><!--name-->
						<p id="name">{{$profile->name}}</p>
					</div>
					<div class="col-4">
						<p id="platform">{{$profile->platform}}</p>
						<p id="play_time">{{$profile->play_time}}</p>
					</div>
					<div class="col-4">
						<p id="platform">{{$profile->platform}}</p>
						<p id="play_time">{{$profile->play_time}}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection