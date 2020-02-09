<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p><?php echo $this->session->flashdata('msg') ?></p>
	<?php echo form_open_multipart('product/upload'); ?>
		<input type="text" name="nama">
		<input type="text" name="harga">
		<input type="file" name="gambar">
		<input type="submit" value="OKE">
	<?php echo form_close() ?>
</body>
</html>