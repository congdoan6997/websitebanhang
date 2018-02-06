<?php
    if(isset($_GET['trang'])){
        $trang = $_GET['trang'];
        $c = ($trang -1)*5;
        $sql = "select * from chitietsp limit ".$c.",5"; 
    }else{
        $sql = "select * from chitietsp limit 0,5";
    }
    
    $result=mysqli_query($con,$sql);
    
?>
<p id="typeproduct">Tất cả sản phẩm</p>
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
<p style="clear:both;"></p>
Trang: 
<?php
    $sql = "select * from chitietsp";
    $result= mysqli_query($con,$sql);
    $count= mysqli_num_rows($result);
    $a = ceil($count/5);
    for($b =1; $b <=$a;$b++){

        if(isset($trang)){
            if($b == $trang){
                echo '<a style="text-decoration:none;color:red;" href ="?trang='.$b.'">'.'     '.$b.'     '.'</a>';
            }else{
                echo '<a style="text-decoration:none;color:black;" href ="?trang='.$b.'">'.'     '.$b.'     '.'</a>';
                }
        }else{
            if($b == 1){
                echo '<a style="text-decoration:none;color:red;" href ="?trang='.$b.'">'.'     '.$b.'     '.'</a>';
            }else{
                echo '<a style="text-decoration:none;color:black;" href ="?trang='.$b.'">'.'     '.$b.'     '.'</a>';
                }
        }
       
        
    }   

?>