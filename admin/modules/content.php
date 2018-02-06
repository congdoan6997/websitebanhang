<div class="content">
        <?php
	if(isset($_GET['quanly'])){
	   $temp= $_GET['quanly'];
	}else{
	   $temp='';
	}
    if($temp=='quanlyloaisp'){
        include('modules/quanlyloaisp/main.php');
    }else if($temp=='quanlyhieusp'){
        include('modules/quanlyhieusp/main.php');
    }else if($temp=='quanlychitietsp'){
        include('modules/quanlychitietsp/main.php');
    }else if($temp == 'doimatkhau'){
        include('doimatkhau.php');
    }else if($temp == 'gallery'){
        include('modules/quanlygallery/main.php');
    }
    
?>
<div class="clear"></div>