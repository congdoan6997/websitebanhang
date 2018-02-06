<?php
	$sql ="SELECT chitietsp.id_sp,chitietsp.tensp,chitietsp.hinhanh,chitietsp.gia,loaisp.tenloaisp,hieusp.tenhieusp,chitietsp.thutu FROM `chitietsp`,loaisp,hieusp WHERE chitietsp.id_loaisp=loaisp.id_loaisp and chitietsp.id_hieusp=hieusp.id_hieusp ORDER BY id_sp DESC ";
    $result = mysqli_query($con,$sql);
?>
<table width="710" border="1">
<tr>
	<td>ID</td>
	<td>Tên sp</td>
	<td>Hình ảnh</td>
	<td>Giá</td>
    <td>Loại sp</td>
	<td>Hiệu sp</td>
	<td>Thứ tự</td>
	<td colspan="2">Quản lý</td>
</tr>
<?php
    $i=0;
	while($row=mysqli_fetch_assoc($result)){
?>
<tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $row['tensp']; ?></td>
	<td>
		<img src="modules/quanlychitietsp/uploads/<?php echo $row['hinhanh']; ?>" width="60" height="60" />
		<p><a href="index.php?quanly=gallery&ac=them&id=<?php echo $row['id_sp']; ?>">Gallery</a></p>
	</td>
	<td><?php echo $row['gia']; ?></td>
    <td><?php echo $row['tenloaisp']; ?></td>
	<td><?php echo $row['tenhieusp']; ?></td>
	<td><?php echo $row['thutu']; ?></td>
	<td>
        <a href="index.php?quanly=quanlychitietsp&ac=sua&id=<?php echo $row['id_sp']; ?>">Sửa</a>
    </td>
	<td>
        <a href="modules/quanlychitietsp/xuly.php?id=<?php echo $row['id_sp']; ?>">Xóa</a>
    </td>
</tr>
<?php
	$i++;
    };
?>
</table>