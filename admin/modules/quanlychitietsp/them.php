<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<form action="modules\quanlychitietsp\xuly.php" method="POST" enctype="multipart/form-data">
<table width="250" border="1px">
<tr>
	<td align="center" colspan="2">Thêm chi tiết sp</td>
</tr>
<tr>
	<td>Tên sp</td>
	<td><input type="text"  name="tensp"/></td>
</tr>
<tr>
	<td>Giá sp</td>
	<td><input type="text"  name="gia"/></td>
</tr>
<tr>
	<td>Hình ảnh</td>
	<td><input type="file" name="hinhanh" /></td>
</tr>
<tr>
	<td>Mô tả sp</td>
	<td><textarea name="mota" cols="40" rows="15"></textarea></td>
</tr>
<?php
	$sql = "select * from loaisp";
    $result= mysqli_query($con,$sql);
    
?>
<tr>
	<td>Loại sp</td>
	<td >
        <select name="loaisp" >
        <?php
	while($row = mysqli_fetch_assoc($result)){
?>
            <option value="<?php echo $row['id_loaisp']; ?>"><?php echo $row['tenloaisp']; ?></option>
        <?php
	};
?>
        </select>
    </td>
</tr>
<?php
	$sql = "select * from hieusp";
    $result= mysqli_query($con,$sql);
    
?>
<tr>
	<td>Hiệu sp</td>
	<td >
        <select name="hieusp" >
        <?php
	while($row = mysqli_fetch_assoc($result)){
?>
            <option value="<?php echo $row['id_hieusp']; ?>"><?php echo $row['tenhieusp']; ?></option>
        <?php
	};
?>
        </select>
    </td>
</tr>
<tr>
	<td>Thứ tự</td>
	<td><input  type="text" name="thutu"/></td>
</tr>
<tr>
		<td colspan="2">
        <div align="center">
            <input type="submit" name="them" value="Thêm" />
        </div>   
	</td> 
</tr>
</table>
</form>