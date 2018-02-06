<div class="content">
<div class="left">
    <?php
	include('modules/left/danhmuc.php');
    
?>
</div>
<div class="right">
    <?php
        if(isset($_GET['view'])){
            $temp = $_GET['view'];
            if($temp== 'infotype'){
                include('modules/right/infotype.php');
            }else if($temp == 'infoproduct'){
                include('modules/right/infoproduct.php');
            }
            else if($temp == 'thongtinhieu'){
                include('modules/right/thongtinhieu.php');
            }else if($temp== 'giohang'){
                include('modules/right/admincp/cart.php');
            }else if($temp=='thongbao'){
                include('modules/right/thongbao.php');
            }
            else if($temp == 'dangky'){
                include('modules/right/dangky.php');
            }else if($temp == 'dangnhap' ||$temp == 'thanhtoan' ){
                include('modules/right/thanhtoan.php');
            }
        }else if(isset($_POST['searchbtn'])){
            include('modules/right/search.php');
        }else{
            include('modules/right/allproduct.php');
        }

    
	?>
</div>


               
</div>
<div class="clear"></div>