<!DOCTYPE html>

<html>
	<head>
		<title>Jendela Pop Up sederhana dengan CSS</title>
		<link rel="stylesheet" href="<?php echo base_url('assets/style.css')?>" type="text/css" />
	</head>
	<body>
		<div id="button"><a href="#popup">Click Me</a></div>
		
		<div id="popup">
			<div class="window">
				<a href="#" class="close-button" title="Close">X</a>
				<h1>Jendela Pop Up</h1>
				<p>Ini adalah jendela Pop Up sederhana tanpa javasript<br/>
				Jendela ini dimunculkan oleh CSS<br/>
				Untuk menutup jendela ini, klik tombol close di kanan atas</p>
			</div>
		</div>
	</body>
</html>