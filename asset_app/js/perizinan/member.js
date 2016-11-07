/**
 * Javacsript member
 * @author Hikmahtiar <hikmahtiar.cool@gmail.com>
 */

window.MEMBER = (function($) {

	return {
		handleRegister: function(formEl) {

			$(document).find('[data-target=#myModal]').click(function() {
				$('.alert').remove();
			});

			$(formEl).ajaxForm({
				type: 'POST',
				dataType: 'json',
				beforeSend: function() {
					$(formEl).find('[name="daftar"]').html('Harap tunggu...');
				},
				success: function(response) {

					toastr.options = {
                        "closeButton": true,
                    };
                    toastr[response.status](response.message);
					

					if(response.close) {
						$(formEl).resetForm();
						$('#myModal').modal("hide");
					}

					$(formEl).find('[name="daftar"]').html('Daftar');
				},
			});
		}
	}

})(jQuery);