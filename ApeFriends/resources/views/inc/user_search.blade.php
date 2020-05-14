<div class="container mt-7 p-lg-9 ">

	<form  action="{{ url('profile/search')}}" method="POST">
	@csrf
	<!--プラットフォーム-->
	<div class="form-group">
		<div class="row mb-4">
			<label class="col-form-label col-12">プラットフォーム</label>
			<div class="col-sm-10">
			@for ($i = 1; $i < 4; $i++)
    				<input type="radio" name="us_platform"
    			@if($i == 1)
	 				 value="1"> <label>PS4</label>
				@elseif($i == 2)
					 value="2"> <label>Xbox</label>
				@elseif($i == 3)
					 value="3"> <label>PC</label>
				@endif
			@endfor
			</div>
		</div>
	</div>

	<div class="form-group pb-3">
		<div class="row mb-4">
			<label class="col-form-label col-12">プレイする時間帯</label>
				<div class="col-sm-10"><select
				name="us_play_time">
				<option value="">未指定</option>
					@foreach ($m_play_times as $m_play_time)
				<option
					  value="{{$m_play_time->code}}">{{$m_play_time->value}}</option>
				@endforeach
			</select>
			</div>
		</div>
	</div>

	<!--ボタンブロック-->
	<div class="form-group row">
		<div class="col-sm-12">
			<button type="submit" id="user_search_onsubmit"
				class="btn btn-primary btn-block">検索</button>
		</div>
	</div>
	<!--/ボタンブロック-->
	</form>
</div>
<!-- /container -->