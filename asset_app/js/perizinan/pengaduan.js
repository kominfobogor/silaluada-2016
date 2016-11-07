/**
 * Javacsript Pengaduan
 * @author Hikmahtiar <hikmahtiar.cool@gmail.com>
 */

window.PENGADUAN = (function($) {

	return {
		init: function() {
			var _this = this;

			_this.handleListPengaduan();
			
		},

		handleListPengaduan: function(url, responseEl) {
			$.ajax({
				url: url,
				type: 'POST',
				dataType: 'json',
				beforeSend: function() {
				    $('.loader').show();
				},
				success: function(response) {
					var html = [];	
					//var obj = JSON.parse(response);
					response.forEach(function(entry) {

						var text = entry.pengaduan;
						if(entry.pengaduan.length > 200) {
							text = entry.pengaduan.substring(0, 200) + '..';
						}

						var tgp = entry.jawaban;
						if(tgp.length == 0) {
							tgp = "belum ditanggapi.";
						}

						var div = 
						'<div class="w3-container w3-border wrapper-pengaduan">' +
							'<div class="header-pengaduan">' +
								'ID : ' + entry.ID + 
								'<div class="pull-right">' +
									'<a onclick="window.PENGADUAN.showModal('+entry.ID+');" href="javascript:;">' +
										'Detail' +
									'</a>' +
								'</div>' +
							'</div>' +
							'<p style="color: #FFF;">' +
								text +
							'</p>' +
						'</div>'+
						'<br>' +

						'<div id="'+entry.ID+'" class="w3-modal">' +
							'<div class="w3-modal-content w3-animate-top">' +
								'<header class="w3-container w3-teal">' +
									'<span onclick="window.PENGADUAN.hideModal('+entry.ID+');" class="w3-closebtn">&times;</span>' +
									'<h3>Detail Aspirasi Warga</h3>' +
								'</header>' +
								'<div class="w3-container" style="text-align: justify; overflow: auto;">'+
									'<b>ID: '+entry.ID+'</b> | <b>Pengirim : '+entry.pengirim+'</b> ' +
									'|<b>Waktu Kirim: '+entry.waktukirim+'</b> ' +
									'<br>' + 
									'<b>Deskripsi</b>' +
									'<br>' +
									'<p>' +
										entry.pengaduan +
									'</p>' +
									'<b>Tanggapan</b>' +
									'<p>' +
										tgp +
									'</p>' +
								'</div>' +
								'<footer class="w3-container w3-teal">' +
									'<p><a class="w3-btn w3-white w3-border" style="color: #FFF;" onclick="window.PENGADUAN.hideModal('+entry.ID+');">Tutup</a></p>' +
								'</footer>' +
							'</div>' +
						'</div>';



						html.push(div);
					});

					$(responseEl).html(html);

				    $('.loader').hide();
				}
			});
		},

		showModal: function(idEl) {
			console.log(idEl);
			document.getElementById(idEl).style.display='block';
			//idEl.style.display='block';
		},

		hideModal: function(idEl) {
			document.getElementById(idEl).style.display='none';
		},
	}

})(jQuery);