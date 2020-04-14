@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-6">
			<div class="card" id="profile_update">

				<h1>My profile</h1>

				@include('inc.profile_edit')
			</div>
		</div>
		<div class="col-12 col-sm-6">
			<div class="card">
				<h1>ユーザー検索</h1>
			</div>
		</div>
	</div>
</div>
@endsection
