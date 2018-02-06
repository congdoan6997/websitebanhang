<?php
    include('../config.php');
    $id=$_GET['id'];
    $tensp=$_POST['tensp'];
    $mota=$_POST['mota'];
    $gia=$_POST['gia'];
    $loaisp=$_POST['loaisp'];
    $hieusp = $_POST['hieusp'];
    $hinhanh=$_FILES['hinhanh']['name'];
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    $thutu=$_POST['thutu'];
    if(isset($_POST['them'])){
        $sql="insert into chitietsp 
        (tensp,thutu,mota,gia,id_loaisp,id_hieusp,hinhanh) 
        values ('$tensp' ,'$thutu','$mota','$gia','$loaisp','$hieusp','$hinhanh')";
        mysqli_query($con,$sql);
        header('location:../../index.php?quanly=quanlychitietsp&ac=them');
    }else if(isset($_POST['sua'])){
        if($hinhanh != ''){
        $sql = "update chitietsp set tensp ='$tensp',thutu='$thutu',mota='$mota',
        gia= '$gia',id_loaisp='$loaisp',id_hieusp = '$hieusp',hinhanh='$hinhanh' where id_sp='$id'";}
        else {
            $sql = "update chitietsp set tensp ='$tensp',thutu='$thutu',mota='$mota',
        gia= '$gia',id_loaisp='$loaisp',id_hieusp = '$hieusp' where id_sp='$id'";
        }
        mysqli_query($con,$sql);
        header('location:../../index.php?quanly=quanlychitietsp&ac=sua&id='.$id);
    }else{
        $sql="delete from chitietsp where id_sp = '$id'";
        mysqli_query($con,$sql);
        header('location:../../index.php?quanly=quanlychitietsp&ac=them');
    }
?>