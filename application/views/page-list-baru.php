		<div class="row">
			<div class="col-md-8 col-sm-8">
			<?php
				if ($all->num_rows()>0) {
					foreach ($all->result() as $row) {
				?>
				<div class="list-content clearfix">
					<div class="col-md-4 no-left-padding">
						<div class="image-container">
							<a href="<?php echo linked($row->post_id, $row->title) ?>">
							<img src="<?php echo get_image($row->body, $row->image) ?>" alt="<?php echo $row->title ?>">
							</a>
						</div>
					</div>
					<div class="col-md-8 no-left-padding">
						<h4 class="no-margin"><a href="<?php echo linked($row->post_id, $row->title) ?>"><?php echo $row->title ?></a></h4>
						<div class="content-meta margin-y-5">
							<small><i class="fa fa-calendar"></i> <?php echo convert_tanggal($row->date_publish) ?> </small>
							<small class="margin-x-10"><i class="fa fa-eye"></i> Views : <?php echo $row->view ?></small>
							<small><i class="fa fa-user"></i> By <a><?php echo $row->user_name ?></a></small>
						</div>
						<div align="justify">
							<?php echo strip_tags(substr($row->body, 0,350))?>..
						</div>
					</div>
				</div>
				<?php
				}
			} else {
				echo "Belum ada data diinputkan!! Silahkan kembali lagi nanti.";
			}
			?>
				<div class="clearfix padding-y-10">
					<div class="pull-right">
					<?php echo $this->pagination->create_links(); ?>
					</div>
				</div>
			</div>

			
		</div>