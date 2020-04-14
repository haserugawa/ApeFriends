<div class="container mt-7 p-lg-9 bg-light">

	<!--アイコンファイル選択-->
	<div class="custom-file mb-5">
		<label for="name">アイコン画像</label> <input type="file"
			class="custom-file-input pb-3" id="customFile" required> <label
			class="custom-file-label pb-3" for="customFile">ファイル選択...</label>
		<div class="invalid-feedback">ファイルを選択してください</div>
	</div>
	<!--/アイコンファイル選択-->

	<!--氏名-->
	<div class="form-row mb-4">
		<div class="col-md-6">
			<label for="name">ニックネーム</label> <input type="text"
				class="form-control" id="profile_update_name" value="{{ Auth::user()->name }}"
				placeholder="ニックネーム" required>
			<div class="invalid-feedback">入力してください</div>
		</div>
	</div>
	<!--/氏名-->

	<!--プラットフォーム-->
	<div class="form-group">
		<div class="row mb-4">
			<label class="col-form-label col-lg-4">プラットフォーム</label>
			<div class="col-sm-10">
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="customRadioInline1" name="pratform"
						class="custom-control-input" value="1" required> <label
						class="custom-control-label" for="customRadioInline1">PS4</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="customRadioInline2" name="pratform"
						class="custom-control-input" value="2"> <label
						class="custom-control-label" for="customRadioInline2">Xbox</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="customRadioInline3" name="pratform"
						class="custom-control-input" value="3"> <label
						class="custom-control-label" for="customRadioInline3">PC</label>
				</div>
			</div>
		</div>
	</div>

	<!--自己紹介-->
	<div class="form-group pb-3">
		<label for="Textarea">自己紹介</label>
		<textarea class="form-control" id="self_introduction" rows="4"
			placeholder="自己紹介" required></textarea>
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