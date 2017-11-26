$(document).ready(function () {
	$('#ajaxForm').submit(function (e) {
		e.preventDefault();
		var form = $(this).serializeArray();

		$.ajax({
			method: "POST",
			url: "../../controller.php",
			data: form,
			dataType: "json"
		}).done( function (response) {
			console.log(response);

			$('#msg').html(response.msg);
			$('.alert').removeClass('fade').addClass('alert-danger');

			if (response.status) {
				$('#sendMail').each(function () {
					$('.alert').removeClass('alert-danger').addClass('alert-success');
					this.reset();
				});
			}
		});

		return false;
	});
});