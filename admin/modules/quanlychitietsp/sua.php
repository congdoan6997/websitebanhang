<?php
    $id = $_GET['id'];
	$sql ="select * from chitietsp where id_sp = '$id'";
    $result  = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    
?>
    
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<form action="modules\quanlychitietsp\xuly.php?id=<?php  echo $id; ?>" method="POST" enctype="multipart/form-data">
<table width="400px" border="1px">
<tr>
	<td align="center" colspan="2">Sửa chi tiết sp</td>
</tr>
<tr>
	<td>Tên sp</td>
	<td><input type="text"  name="tensp" value="<?php echo $row['tensp']; ?>" /></td>
</tr>
<tr>
	<td>Giá sp</td>
	<td><input type="text"  name="gia" value="<?php echo $row['gia']; ?>" /></td>
</tr>
<tr>
	<td>Hình ảnh</td>
	<td><input type="file" name="hinhanh" />
        <img width="60"  height="60" src="modules/quanlychitietsp/uploads/<?php echo $row['hinhanh']; ?> "/>
    </td>
</tr>
<tr>
	<td>Mô tả sp</td>
	<td><textarea name="mota" cols="40" rows="15"><?php echo $row['mota']; ?></textarea></td>
</tr>
<?php
	$sql = "select * from loaisp";
    $result= mysqli_query($con,$sql);
    
?>
<tr>
	<td>Loại sp</td>
	<td >
        <select  name="loaisp" >
        <?php
	while($row1 = mysqli_fetch_assoc($result)){
	   if($row['id_loaisp'] == $row1['id_loaisp']){
?>
            <option selected="true" value="<?php echo $row1['id_loaisp']; ?>"><?php echo $row1['tenloaisp']; ?></option>
        <?php
        }else{
            ?>
            <option value="<?php echo $row1['id_loaisp']; ?>"><?php echo $row1['tenloaisp']; ?></option>
            <?php
        }
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
        <select  name="hieusp" >
        <?php
	while($row1 = mysqli_fetch_assoc($result)){
	   if($row['id_hieusp'] == $row1['id_hieusp']){
?>
            <option selected="true" value="<?php echo $row1['id_hieusp']; ?>"><?php echo $row1['tenhieusp']; ?></option>
        <?php
        }else{
            ?>
            <option value="<?php echo $row1['id_hieusp']; ?>"><?php echo $row1['tenhieusp']; ?></option>
            <?php
        }
	};
?>
        </select>
    </td>
</tr>
<tr>
	<td>Thứ tự</td>
	<td><input  type="text" name="thutu" value="<?php echo $row['thutu']; ?>"/></td>
</tr>
<tr>
		<td colspan="2">
        <div align="center">
            <input type="submit" name="sua" value="Sửa" />
        </div>   
	</td> 
</tr>
</table>
</form>