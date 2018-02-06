<div class="left">
    <?php 
        $temp=$_GET['ac'];
        if($temp== 'them'){
            include('modules/quanlygallery/them.php');
        }else if($temp == 'sua'){
            include('modules/quanlygallery/sua.php');
        }else{

        }
    ?>
</div>
<div class="right">
    <?php 
        include('modules/quanlygallery/lietke.php');
    ?>
</div>