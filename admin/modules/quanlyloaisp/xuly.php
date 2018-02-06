<?php
    include('../config.php');
    $id=$_GET['id'];
    $tenloaisp=$_POST['tenloaisp'];
    $thutu=$_POST['thutu'];
    if(isset($_POST['them'])){
        $sql="insert into loaisp (tenloaisp,thutu) values ('$tenloaisp','$thutu')";
        mysqli_query($con,$sql);
        header('location:../../index.php?quanly=quanlyloaisp&ac=them');
    }else if(isset($_POST['sua'])){
        $sql = "update loaisp set tenloaisp ='$tenloaisp',thutu='$thutu' where id_loaisp='$id'";
        mysqli_query($con,$sql);
        header('location:../../index.php?quanly=quanlyloaisp&ac=sua&id='.$id);
    }else{
        $sql="delete from loaisp where id_loaisp = $id";
        mysqli_query($con,$sql);
        header('location:../../index.php?quanly=quanlyloaisp&ac=them');
    }
?>