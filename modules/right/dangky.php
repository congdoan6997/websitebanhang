<?php
    if(isset($_POST['dangky'])){
        $tenkhachhang=$_POST['tenkhachhang'];
        $matkhau=$_POST['matkhau'];
        $email=$_POST['email'];
        $diachi = $_POST['diachi'];
        $dienthoai=$_POST['dienthoai'];
        if($tenkhachhang != '' && $matkhau != ''){
            $sql = "insert into thanhvien (tenkhachhang, matkhau, email, diachi, dienthoai)
            values ('$tenkhachhang','$matkhau','$email','$diachi', '$dienthoai')";
            $result = mysqli_query($con,$sql); 
            if($result){
                header('location:index.php?view=thongbao');
             }else{
                header('location:index.php?view=dangky');
            }
        }
    }

?>
<form action="index.php?view=dangky" method="post" enctype="multipart/form-data">
<table border="1" width="400">
    <tr>
        <td align="center" colspan="2">Đăng ký thành viên</td>
    </tr>
    <tr>
        <td>Tên khách hàng</td>
        <td ><input  type="text" name="tenkhachhang"></td>
    </tr>
    <tr>
        <td>Mật khẩu</td>
        <td><input type="password" name="matkhau"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="email" name="email" id=""></td>
    </tr>
    <tr>
        <td>Địa chỉ</td>
        <td><input type="text" name="diachi"></td>
    </tr>
    <tr>
        <td>Điện thoại</td>
        <td><input type="text" name="dienthoai" id=""></td>
    </tr>
    <tr>
        <td align="center" colspan ="2">
            <input type="submit" value="Đăng ký" name="dangky">
        </td>
    </tr>
</table>
</form>