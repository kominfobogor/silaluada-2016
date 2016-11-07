/**
 * Javacsript Pesan
 * @author Hikmahtiar <hikmahtiar.cool@gmail.com>
 */

window.PESAN = (function($) {

	return {

		init: function() {
			var _this = this;

			_this.handleModal();
			_this.handleSendMessage();
			_this.handleDatatable();
			setTimeout(function() {
				_this.removeNotif();
			}, 700);
		},

		handleModal: function() {


			$('.send-message').click(function() {

				$(document).find('[name=pesan_untuk_id]').chosen({
					width: '100%'
				});
		        
		        $('.modal').modal('show');

		        if($(this).attr('data-id') != undefined) {
		        	$(document).find('[name=pesan_untuk_id]').val($(this).attr('data-id'));

		        	$(document).find('[name=pesan_untuk_id]').trigger('chosen:updated');
		        }

		    });
		},

		handleSendMessage: function() {
			$('.form-message').ajaxForm({
				dataType: 'json',
				beforeSend: function() {
					$('.form-message').find('[type=submit]').html('Harap Tunggu...');
				},
				success: function(response) {
					$('.form-message').find('[type=submit]').html('Kirim');

					toastr.options = {
                        "closeButton": true,
                    };
                    toastr[response.status](response.message);

                    if(response.status == 'success') {
		        		$('.modal').modal('hide');

		        		$('.form-message').resetForm();
                    }
				}
			});
		},

		handleDatatable: function() {
			$('.datatables').DataTable();
		},

		removeNotif: function() {
			$(document).find('.info-new').effect('highlight', {}, 6000);

			setTimeout(function() {
				$.post(CI.siteUrl + '/adm_pesan/reset_notif',{}, function(notifikasi){});
			}, 200);

			setTimeout(function() {
				$.post(CI.siteUrl + '/adminweb/notif',{}, function(notifikasi){
		              $(document).find("#notif").html(notifikasi);
		      	});

		      	$.post(CI.siteUrl + '/dashboard_member/notification',{}, function(notifikasi){
		              $(document).find(".notification-message").html(notifikasi);
		      	});
			}, 500);
		}

	}

})(jQuery);