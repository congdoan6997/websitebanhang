<h3>Thêm gallery</h3>
<?php
	$id = $_GET['id'];


?>
<form action="modules/quanlygallery/xuly.php?id=<?php echo $id; ?>" method="post" enctype = "multipart/form-data">
	<input type="file" name="file[]" id="" multiple = "multiple">
	<input type="submit" name="upload" value="Upload">

</form>