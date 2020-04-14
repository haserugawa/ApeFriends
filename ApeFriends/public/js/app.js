$(function() {

	$.ajaxSetup({
		headers : {
			'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
		}
	});

	// プロフィール更新ボタン押下時、ajax処理
	$('#profile_onsubmit').click(function() {
		$.ajax({
			type : 'POST', // GETかPOSTか
			url : 'profile/update_job',
			data : {
				'name' : $('#profile_update_name').val(),
				'self_introduction' : $('#self_introduction').val()
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
});