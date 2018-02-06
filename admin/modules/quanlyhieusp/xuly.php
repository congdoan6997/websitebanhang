<?php
	include('../config.php');
    $id=$_GET['id'];
    $tenhieusp=$_POST['tenhieusp'];
    $thutu = $_POST['thutu'];
    if(isset($_POST['them'])){
        $sql = "insert into hieusp (tenhieusp,thutu) values ('$tenhieusp','$thutu')";
        mysqli_query($con,$sql);
        header('location:../../index.php?quanly=quanlyhieusp&ac=them');
    }else if(isset($_POST['sua'])){
        $sql = "update hieusp set tenhieusp = '$tenhieusp',thutu = '$thutu' where id_hieusp = '$id'";
        mysqli_query($con,$sql);
        header('location:../../index.php?quanly=quanlyhieusp&ac=sua&id='.$id);
    }else{
        $sql="delete from hieusp where id_hieusp='$id'";
        mysqli_query($con,$sql);
        header('location:../../index.php?quanly=quanlyhieusp&ac=them');
    }
?>