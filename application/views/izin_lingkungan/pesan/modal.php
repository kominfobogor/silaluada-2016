<form class="form-message" method="POST" action="<?php echo site_url('pesan/mengirim'); ?>">
    <div class="modal fade" tabindex="-1" role="dialog" id="modal">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
            

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">
              Buat Pesan
            </h4>
          </div>
          <div class="modal-body">


                  <div class="form-group">
                      <label>Kepada</label>
                      <select class="form-control" name="pesan_untuk_id">
                          <option value="">- pilih -</option>

                          <?php if($admin_bplh): ?>

                              <?php foreach($admin_bplh as $row): ?>

                                  <option value="<?php echo $row->user_id; ?>">
                                      <?php echo $row->user_name ?>
                                  </option>

                              <?php endforeach; ?>
                          <?php endif; ?>

                      </select>
                  </div>

                  <div class="form-group">
                      <label>Isi Pesan</label>
                      <textarea class="form-control" name="pesan_text"></textarea>
                  </div>


          </div>

          <div class="modal-footer">
            <button class="btn btn-sm btn-primary" type="submit">
              <i class="fa fa-outbox"></i> Kirim
            </button>
            <button class="btn btn-sm btn-default" data-dismiss="modal" aria-label="Close">
              <i class="fa fa-times"></i> Batal
            </button>
          </div>

        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</form>