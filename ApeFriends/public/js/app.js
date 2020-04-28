$(function() {

	var platform_radio_value;
	var play_time_value;

	$.ajaxSetup({
		headers : {
			'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
		}
	});

	// プロフィール更新ボタン押下時、POST処理
	$('#profile_onsubmit').click(function() {

		if(platform_radio_value == null){
			platform_radio_value = $('input[name="platform"]:checked').val();
		}
		if(play_time_value == null){
			play_time_value = $('select[name="play_time"] option:selected').val();
		}

		$.ajax({
			type : 'POST', // GETかPOSTか
			url : 'profile/update_job',
			data : {
				'name' : $('#profile_update_name').val(),
				'self_introduction' : $('#self_introduction').val(),
				'platform' : platform_radio_value,
				'play_time' : play_time_value,
			}
		}).done(function(results) {
			$('#profile_update_name').html(results);// 展開したいタグのidを指定

			// アラートを表示する
			$('#alert_space').append(alertSuccess('更新に成功しました'));

		}).fail(function(jqXHR, textStatus, errorThrown) {
			$('#alert_space').append(alertWarning('更新に失敗しました'));

			console.log("ajax通信に失敗しました")
			console.log(jqXHR.status);
			console.log(textStatus);
			console.log(errorThrown.message);
		});

	});

	function alert(msg) {
		var $alert = $('<div class="alert" role="alert"></div>').text(msg);
		setTimeout("$('.alert').fadeOut()", 5000);
		return  $alert;
	}

	// アラート生成処理
	function alertSuccess(msg) {
		return alert(msg)
				.addClass('alert-success alert-dismissable')
				.append(
						$(
								'<button id="alert_close_btn" class="close" data-dismiss="alert"></button>')
								.append($('<span aria-hidden="true">☓</span>')));
	}

	function alertWarning(msg) {
		return alert(msg)
				.addClass('alert-warning alert-dismissable')
				.append(
						$(
								'<button id="alert_close_btn" class="close" data-dismiss="alert"></button>')
								.append($('<span aria-hidden="true">☓</span>')));
	}

	// ボタンクリックでアラートを消す
	$('#alert_close_btn').on('click', function() {
		$('#alert_space').alert( 'close' );
	});


	//プロフィール情報操作時に送信用パラメータとしてセット
	$('input[name="platform"]').change(function() {
		platform_radio_value = $(this).val();
	})

	$('select[name="play_time"]').change(function() {
		play_time_value = $(this).val();
	})

	//ホーム画面カードのコラプス時のアイコン表示
	$("#profile_update").on("show.bs.collapse", function(){
    	$("#profile_update h1 span").html('<i class="fas fa-angle-down"></i>');
	});
	$("#profile_update").on("hide.bs.collapse", function(){
	    $("#profile_update h1 span").html('<i class="fas fa-angle-up"></i>');
	  });

	$("#user_search").on("show.bs.collapse", function(){
    	$("#user_search h1 span").html('<i class="fas fa-angle-down"></i>');
	});
	$("#user_search").on("hide.bs.collapse", function(){
	    $("#user_search h1 span").html('<i class="fas fa-angle-up"></i>');
	  });

});

