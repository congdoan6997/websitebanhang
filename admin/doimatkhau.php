<?php
    if(isset($_POST['doimatkhau'])){
        $user = $_POST['user'];
        $passold = $_POST['passold'];
        $passnew = $_POST['passnew'];
        $sql = "select * from admin where username= '$user' and password = '$passold'";
        $result = mysqli_query($con,$sql);
        $count = mysqli_num_rows($result);
        if($count ==  0){
            echo 'Sai tài khoản hoặc mật khẩu';
        }else{
            $sql = "update admin set password = '$passnew' where username = '$user'";  
            echo 'Bạn đã cập nhật mật khẩu thành công';
        }
    }

?>
<form  action="" method="POST" enctype="multipart/form-data">
<center>
<table  width="400" border="1">
<tr>
	<td align="center" colspan="2">Đổi mật khẩu admin</td>
</tr>
<tr>
	<td>Tên tài khoản</td>
	<td>
        <input type="text" name="user"/>
    </td>
</tr>
<tr>
	<td>Mật khẩu cũ</td>
	<td>
        <input type="password" name="passold" />
    </td>
</tr>
<tr>
	<td>Mật khẩu mới</td>
	<td>
        <input type="password" name="passnew" />
    </td>
</tr>
<tr>
    <td align="center" colspan="2">
        <input type="submit" name="doimatkhau"  value="Đổi mật khẩu"/>
    </td>
</tr>
</table>
</center>
</form>