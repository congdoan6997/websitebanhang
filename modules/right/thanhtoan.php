<?php
    session_start();
    if(isset($_POST['login'])){
        $user= $_POST['user'];
        $pass = $_POST['pass'];
        $count =0;
        if($user != '' && $pass != ''){
            $sql = "select * from thanhvien where tenkhachhang = '$user' and matkhau = '$pass'";
            $result  = mysqli_query($con,$sql);
            $count = mysqli_num_rows($result);
        }
        
        if($count == 0){
            echo '<script>alert("sai tai khoan hay mat khau")</script>';
        }else{
            $_SESSION['login'] = $user;
            header('location:index.php?view=giohang');
        }
    }
?>
<form action="" method="post" enctype="multipart/form-data">
<table width="400" border="1">
<tr>
	<td align="center" colspan="2">Đăng nhập thành viên</td>
</tr>
<tr>
	<td>Tên tài khoản</td>
	<td>
        <input type="text" name="user" />
    </td>
</tr>
<tr>
	<td>Mật khẩu</td>
	<td>
        <input type="password" name="pass" />
    </td>
</tr>
<tr>
	<td align="center" colspan="2">
        <input type="submit" value="Đăng nhập"  name="login"/>
    </td>
</tr>
</table>
</form>