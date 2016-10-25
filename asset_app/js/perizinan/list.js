window.LIST_PERIZINAN = (function($) {

	return {

		dataTableSPPL: null,
		dataTableUKLUPL: null,
		dataTableAMDAL: null,
		dataTableLimbahCair: null,
		init: function() {
			var _this = this;
			
			_this.handleDataTable();
		},

		handleDataTable: function() {
			var _this = this;

			_this.dataTableSPPL = $('#table-sppl').DataTable({
				ajax: {
					url: CI.siteUrl + '/list_perizinan/data_sppl'
				},
				deferRender: true,
				columns: [
                    {
                        data: 'no',
                        orderable: false,
                        visible: false
                        //render: renderColId,
                    },
                    {
                        data: 'no_sppl',
                    },                    
                    {
                        data: 'tanggal',
                    },
                    {
                        data: 'nama_kegiatan',
                        //render: renderColName
                    },
                    {
                        data: 'alamat_kegiatan',
                    },
                    {
                        data: 'nama_pemohon',
                    },
                    {
                        data: 'alamat_pemohon',
                    },
                ],
                order: [2, 'desc'],
                initComplete: function() {
                	_this.customDatatable(_this.dataTableSPPL);
                }
			});

			_this.dataTableUKLUPL = $('#table-uklupl').DataTable({
				ajax: {
					url: CI.siteUrl + '/list_perizinan/data_uklupl'
				},
				deferRender: true,
				columns: [
                    {
                        data: 'no',
                        orderable: false,
                        visible: false
                        //render: renderColId,
                    },
                    {
                        data: 'no_uklupl',
                    },                    
                    {
                        data: 'tanggal',
                    },
                    {
                        data: 'nama_kegiatan',
                        //render: renderColName
                    },
                    {
                        data: 'alamat_kegiatan',
                    },
                    {
                        data: 'nama_pemohon',
                    },
                    {
                        data: 'alamat_pemohon',
                    },
                    {
                    	data: 'keterangan'
                    }
                ],
                order: [2, 'desc'],
                initComplete: function() {
                	_this.customDatatable(_this.dataTableUKLUPL);
                }
			});

			_this.dataTableAMDAL = $('#table-amdal').DataTable({
				ajax: {
					url: CI.siteUrl + '/list_perizinan/data_amdal'
				},
				deferRender: true,
				columns: [
                    {
                        data: 'no',
                        orderable: false,
                        visible: false
                        //render: renderColId,
                    },                    
                    {
                        data: 'nama_kegiatan',
                        //render: renderColName
                    },
                    {
                        data: 'alamat_kegiatan',
                    },
                    {
                        data: 'ka_andal',
                    },
                    {
                        data: 'andal',
                    },
                    {
                        data: 'amdal',
                    },
                    {
                        data: 'tanggal',
                    },
                    {
                    	data: 'keterangan'
                    }
                ],
                order: [6, 'desc'],
                initComplete: function() {
                	_this.customDatatable(_this.dataTableAMDAL);
                }
			});

			_this.dataTableLimbahCair = $('#table-limbah-cair').DataTable({
				ajax: {
					url: CI.siteUrl + '/list_perizinan/data_limbah_cair'
				},
				deferRender: true,
				columns: [
                    {
                        data: 'no',
                        orderable: false,
                        visible: false
                        //render: renderColId,
                    },                    
                    {
                        data: 'no_izin',
                        //render: renderColName
                    },
                    {
                        data: 'jenis_kegiatan',
                    },
                    {
                        data: 'nama_kegiatan',
                    },
                    {
                        data: 'alamat',
                    },
                    {
                        data: 'pimpinan',
                    },
                    {
                        data: 'kontak',
                    },
                    {
                    	data: 'masa_berlaku'
                    },
                    {
                    	data: 'status'
                    }
                ],
                initComplete: function() {
                	_this.customDatatable(_this.dataTableLimbahCair);
                }
			});
		},

		customDatatable: function(datatable) {

            $('.dataTables_filter').css('display', 'none');

			$('.btn-search-datatable').click(function() {
				datatable.search($('.search-datatable').val()).draw();
			});

			$('.search-datatable').keyup(function() {
				if(this.value == "") {
					datatable.search(this.value).draw();
				}
			});

			datatable.on('order.dt search.dt', function() {

                datatable.column(0, {
                    search: 'applied',
                    order: 'applied', 
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();

		}
	}


})(jQuery);