<div class="left">
    <?php 
        $temp=$_GET['ac'];
        if($temp== 'them'){
            include('modules/quanlyhieusp/them.php');
        }else if($temp == 'sua'){
            include('modules/quanlyhieusp/sua.php');
        }else{

        }
    ?>
</div>
<div class="right">
    <?php 
        include('modules/quanlyhieusp/lietke.php');
    ?>
</div>