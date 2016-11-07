window.ADMIN = (function($) {
	return {

		init: function() {
			var _this = this;

			setTimeout(function() {
				_this.clearNotif();
			}, 1000);
		},

		clearNotif: function() {

			var resetEl = $('a.reset-notif');

			resetEl.click(function(e) {

				var __this = this;
				e.preventDefault();

				$.ajax({
					url: CI.siteUrl + '/adminweb/delete_notif',
					type: 'POST',
					data: {
						id: $(this).attr('data-id')
					},
					success: function(response) {
						window.location = $(__this).attr('href');
					}
				});
			});
		}	

	}
})(jQuery);