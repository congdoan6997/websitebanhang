<?php
    $sql1 = "select * from chitietsp where id_sp = '$_GET[id]'";
    $result111 = mysqli_query($con,$sql1);
    $row12= mysqli_fetch_assoc($result111);
    
?>
<table width="500" border="1" style="border-collapse: collapse;">
<tr>
	<td colspan="2">
        <div align="center">
           Chi tiết sản phẩm
        </div>
    </td>
</tr>
<tr>
	<td rowspan="2" align="center">
        <img src="admin/modules/quanlychitietsp/uploads/<?php echo $row12['hinhanh']; ?>" width="200" height="200"/>
    </td>
	<td>Tên SP: <?php echo $row12['tensp']; ?></td>
</tr>
<tr>
	<td style="color: red;">Giá SP: <?php echo $row12['gia']; ?>000 VND</td>
</tr>
<tr>
	<td colspan="2">
        <div align="center">
           Thông số kĩ thuật
        </div>
    </td>
</tr>
<tr>
	<td colspan="2"><?php echo $row12['mota']; ?></td>
</tr>
<a href="index.php?view=giohang&add=<?php echo $row12['id_sp']; ?>">
    <img src="admin\modules\quanlychitietsp\imgs\buy-blue.png" style="float:right;" width="200" height="100" >
</a>
</table>

<p id="typeproduct">Sản phẩm liên quan</p>
<?php
    $id_loaisp = $row12['id_loaisp'];
    $id_sp = $_GET['id'];
    $sql = "select * from chitietsp where id_loaisp = '$id_loaisp' and id_sp <> '$id_sp' limit 5";
    $result = mysqli_query($con,$sql);
?>
    <div class="allproduct">
        <ul>
            <?php 
                while($row=mysqli_fetch_assoc($result)){
            ?>
            <li><a href="index.php?view=infoproduct&id=<?php echo $row['id_sp']; ?>">
                <img src="admin/modules/quanlychitietsp/uploads/<?php echo $row['hinhanh']; ?>" width="100px" height="100px" />
                    <p><?php echo $row['tensp']; ?></p>
                    <p style="color: red;">Giá sp:<?php echo $row['gia']; ?></p>
                    <p style="color: red;" >Chi tiết</p>
                </a></li>
            <?php
                };
            ?>
        </ul>
    </div>