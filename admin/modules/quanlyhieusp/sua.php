<?php
    $id=$_GET['id'];
    $sql = "select * from hieusp where id_hieusp = '$id'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<form action="modules/quanlyhieusp/xuly.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
<table width="100%" border="1">
<tr>
	<td align="center" colspan="2">Sửa hiệu sp</td>
</tr>
<tr>
	<td >Tên hiệu sp</td>
	<td><input type="text" name="tenhieusp" value="<?php echo $row['tenhieusp']; ?>" /></td>
</tr>
<tr>
	<td>Thứ tự</td>
	<td><input type="text" name="thutu" value="<?php echo $row['thutu']; ?>" /></td>
</tr>
<tr>
	<td colspan="2">
        <div align="center">
            <button name="sua" value="Sửa">Sửa</button>
        </div>
    </td>
</tr>
</table>
</form>