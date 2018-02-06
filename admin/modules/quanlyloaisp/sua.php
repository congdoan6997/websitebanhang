<?php
    $id = $_GET['id'];
	$sql ="select * from loaisp where id_loaisp = $id";
    $result  = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    
?>
<form action="modules\quanlyloaisp\xuly.php?id=<?php echo $row['id_loaisp'] ?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
<tr>
	<td colspan="2">
        <div align="center">Sửa loại sp</div>
     </td>
</tr>
<tr>
	<td>Tên loại sp</td>
	<td><input type="text" name="tenloaisp" value="<?php echo $row['tenloaisp']; ?>" /></td>
</tr>
<tr>
	<td>Thứ tự</td>
	<td><input type="text" name="thutu"  value="<?php echo $row['thutu']; ?>"/></td>
</tr>
<tr>
	<td colspan="2">
        <div align="center">
            <input type="submit" name="sua" value="Sửa" /></td>
        </div>    
</tr>
</table>
</form>