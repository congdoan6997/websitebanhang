<?php
	$sql="select * from chitietsp where id_hieusp = '$_GET[id]'";
    $sql2 ="select * from hieusp where id_hieusp = '$_GET[id]'";
    $result = mysqli_query($con,$sql);
    $result2=mysqli_query($con,$sql2);
    $row12=mysqli_fetch_assoc($result2);
    
?>
<p id="typeproduct"><?php echo $row12['tenhieusp']; ?></p>
                    <div class="allproduct">
                        <ul>
                            <?php
                                while($row=mysqli_fetch_assoc($result)){
                            ?>
                            <li><a href="index.php?view=infoproduct&id=<?php echo $row['id_sp'] ?>">
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