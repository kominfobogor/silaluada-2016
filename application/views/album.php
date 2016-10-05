<div class="w3-row w3-white">
	<div class="w3-twothird w3-content w3-white w3-padding">
	<div class="w3-container w3-padding">
		<h2>Album Galeri</h2>
		<?php
		$no = 1;
		foreach ($album->result() as $al) {
		?>
		<div class="col-md-3">
			<div class="image-container image-galeri">
				<a href="<?php echo site_url('galeri/album/'.$al->album_id) ?>">
				<img src="<?php echo galeri_album($al->album_id) ?>" class="galeri">
				<div class="overlay">
				<?php echo $al->album_title ?>
				</div>
				</a>
			</div>
		</div>
		
		<?php 
			$htg = $no % 4;
			if($htg == 0): 
		?>
		
		<div class="w3-row"></div>
		
		<?php endif; ?>
		<?php
		$no++;
		}
		?>
	</div>
	</div>
</div>