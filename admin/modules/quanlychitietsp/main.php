<div class="left">
    <?php
	if(isset($_GET['ac'])){
	   $temp = $_GET['ac'];
	}else{
	   $temp= '';
	}
    if($temp=='them' || $temp == ''){
        include('modules/quanlychitietsp/them.php');
    }else if($temp='sua'){
        include('modules/quanlychitietsp/sua.php');
    }
?>
</div>
<div class="right">
    <?php
	include('modules/quanlychitietsp/lietke.php');
?>
</div>