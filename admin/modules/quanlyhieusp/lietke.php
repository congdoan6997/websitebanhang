<?php
	$sql = "select * from hieusp order by id_hieusp desc";
    $result = mysqli_query($con,$sql);
    
?>
<table width="500" border="1">
<tr>
	<td>ID</td>
	<td>Tên hiệu sp</td>
	<td>Thứ tự</td>
	<td colspan="2">Quản lý</td>
</tr>
<?php 
    $i=0;
    while($row=mysqli_fetch_assoc($result)){
?>
<tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $row['tenhieusp']; ?></td>
	<td><?php echo $row['thutu']; ?></td>
	<td><a href="index.php?quanly=quanlyhieusp&ac=sua&id=<?php echo $row['id_hieusp']; ?>">Sửa</a></td>
	<td><a href="modules/quanlyhieusp/xuly.php?id=<?php echo $row['id_hieusp']; ?>">Xóa</a></td>
</tr>
<?php
    $i++;
    };
?>
</table>