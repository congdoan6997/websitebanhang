<?php
    if(isset($_POST['searchbtn'])){
        $search = $_POST['searchtxt'];
        if($search != ''){
            $sql = "select * from chitietsp where tensp LIKE '%$search%'";
            $result = mysqli_query($con,$sql);
        }
    }
    
?>
<p id="typeproduct">Sản phẩm tìm thấy</p>
                    <div class="allproduct">
                    <?php
                        if(mysqli_num_rows($result) == 0){
                    ?>
                        <p>Không tìm thấy sản phẩm</p>    
                    <?php
                        }else{
                    ?>
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
                            };
                              ?>
                        </ul>
                    </div>