<form class="form-status" method="POST" action="<?php echo site_url('adm_perizinan_sppl/ubah_status'); ?>">
    <div class="modal modal-status fade" tabindex="-1" role="dialog" id="modal">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
            

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">
              Ubah Status Permohonan
            </h4>
          </div>
          <div class="modal-body">

          		<div class="form-group">
          			<label>
          				Status
          			</label>
          			<select class="form-control" name="status_perizinan">
          				<?php foreach($status_perizinan as $sp => $val): ?>
    	      				<option value="<?php echo $sp; ?>"><?php echo $val; ?></option>
	          			<?php endforeach; ?>
          			</select>
          		</div>

          		<div class="form-group options-terbit">
          			<label>
          				No. Registrasi
          			</label>
          			<input class="form-control" name="no_reg">
          		</div>

          		<div class="form-group options-terbit">
          			<label>
          				No. Izin Terbit
          			</label>
          			<input class="form-control" name="no_izin">
          		</div>

          </div>

          <div class="modal-footer">
            <button class="btn btn-sm btn-primary" type="submit">
              <i class="fa fa-outbox"></i> Simpan
            </button>
            <button class="btn btn-sm btn-default" data-dismiss="modal" aria-label="Close">
              <i class="fa fa-times"></i> Batal
            </button>
          </div>

        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</form>