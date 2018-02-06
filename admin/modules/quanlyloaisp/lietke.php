<?php
	$sql="select * from loaisp order by id_loaisp desc";
    $result= mysqli_query($con,$sql);
?>
<table width="500" border="1px">
<tr>
	<td>ID</td>
	<td>Tên loại sp</td>
	<td>Thứ tự</td>
	<td colspan="2">Quản lý</td>
</tr>
<?php
$i=0;
	while($row=mysqli_fetch_assoc($result)){
?>
<tr>
	<td><?php
	echo $i;
?></td>
	<td><?php
	echo $row['tenloaisp'];
?></td>
	<td><?php
	echo $row['thutu']
?></td>
	<td><a href="index.php?quanly=quanlyloaisp&ac=sua&id=<?php echo $row['id_loaisp'] ?>">Sửa</a></td>
	<td><a href="modules/quanlyloaisp/xuly.php?id=<?php echo $row['id_loaisp'] ?>">Xóa</a></td>
</tr>
<?php
	$i++;
    };
?>
</table>