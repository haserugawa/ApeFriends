<div class="container mt-7 p-lg-9 ">

	<!--氏名-->
	<div class="form-row mb-4">
		<div class="col-md-6">
			<label for="name">ニックネーム</label> <input type="text"
				class="form-control" id="profile_update_name"
				value="{{ Auth::user()->name }}" placeholder="ニックネーム" required>
			<div class="invalid-feedback">入力してください</div>
		</div>
	</div>
	<!--/氏名-->

	<!--プラットフォーム-->
	<div class="form-group">
		<div class="row mb-4">
			<label class="col-form-label col-12">プラットフォーム</label>
			<div class="col-sm-10">
			@for ($i = 1; $i < 4; $i++)
    				<input type="radio" name="platform"
    			@if($i == $profile->platform)
    				checked = "checked"
    			@endif
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
				name="play_time"> @foreach ($m_play_times as $m_play_time)
				<option
				@if($profile->play_time == $m_play_time->code)
					 selected
				@endif
					  value="{{$m_play_time->code}}">{{$m_play_time->value}}</option>
				@endforeach
			</select>
			</div>
		</div>
	</div>

	<!--自己紹介-->
	<div class="form-group pb-3">
		<label for="Textarea">自己紹介</label>
		<textarea class="form-control" id="self_introduction" rows="4"
			placeholder="自己紹介" required>{{ $profile->self_introduction }}</textarea>
	</div>
	<!--/自己紹介-->

	<!--ボタンブロック-->
	<div class="form-group row">
		<div class="col-sm-12">
			<button type="submit" id="profile_onsubmit"
				class="btn btn-primary btn-block">更新</button>
		</div>
	</div>
	<!--/ボタンブロック-->
</div>
<!-- /container -->