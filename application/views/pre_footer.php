<hr>

<!-- Call to Action Section -->
<div class="well">
    <div class="row">
        <div class="col-md-8">
            <p>
                <h3><i class="fa fa-picture-o"></i> Galeri</h3>
                <?php
                if ($galeri) {
                    foreach ($galeri->result() as $g) {
                ?>
                        <img style="width: 150px;height: 150px;padding-right: 10px;" class="pull-left img img-responsive" src="<?php echo base_url('uploads/galeri/'.$g->image)?>">
                    
                <?php
                    }
                }
                ?>
                <div class="row"></div>
                    
                <br>

                <div class="pull-left">
                    <a href="<?php echo site_url('galeri'); ?>">
                        Selengkapnya <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </p>
        </div>
        <div class="col-md-4">
            
            <h3>
                <i class="fa fa-phone-square"></i> Kontak Kami
            </h3>
                <?php echo $embed_map ?>
            <p>
                Alamat : <?php echo $alamat ?>
            </p>
            <p>
                Telp. <?php echo $no_telp ?>
            </p>
            <p>
                Email : <?php echo $mail_site ?>
            </p>
            <p>
                Sosial Media : <br/>
                Facebook (<?php echo $fb_site ?>) <br/>
                Twitter (<?php echo $twitter_site ?>)
            </p>

        </div>
    </div>
</div>