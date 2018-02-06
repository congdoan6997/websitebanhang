<?php
    if(isset($_GET['ac']) && $_GET['ac'] == 'dangxuat'){
        unset($_SESSION['dangnhap']);
        header('location:login.php');
    }

?>

<div class="menu">
    <ul>
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="index.php?quanly=quanlychitietsp&ac=them">Quản lý chi tiết sản phẩm</a></li>
        <li><a href="index.php?quanly=quanlyloaisp&ac=them">Quản lý loại sản phẩm</a></li>
        <li><a href="index.php?quanly=quanlyhieusp&ac=them">Quản lý hiệu sản phẩm</a></li>
        <li><a href="index.php?ac=dangxuat">Đăng xuất</a></li>
        <li><a href="index.php?quanly=doimatkhau">Đổi mật khẩu</a></li>
    </ul>
</div>