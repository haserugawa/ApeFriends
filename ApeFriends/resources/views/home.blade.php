@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-md-6">
			<div class="card" id="profile_update">
				<a class="card-header" data-toggle="collapse" href="#profile-card-body" aria-expanded="true">
					<h1>プロフィール<span><i class="fas fa-angle-down"></i></span></h1>
				</a>
				<div class="card-body collapse show" id="profile-card-body">@include('inc.profile_edit')</div>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="card" id="user_search">
				<a class="card-header" data-toggle="collapse" href="#search-card-body" aria-expanded="true">
					<h1>ユーザー検索<span><i class="fas fa-angle-down"></i></span></h1>

				</a>
				<div class="card-body collapse show" id="search-card-body">
					@include('inc.user_search')
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
