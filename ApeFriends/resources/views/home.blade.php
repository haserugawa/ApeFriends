@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-md-6">
			<div class="card" id="profile_update">
				<div class="card-header">
					<h1>My profile</h1>
				</div>
				<div class="card-body">@include('inc.profile_edit')</div>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="card">
				<div class="card-header">
					<h1>ユーザー検索</h1>

				</div>
				<div class="card-body"></div>
			</div>
		</div>
	</div>
</div>
@endsection
