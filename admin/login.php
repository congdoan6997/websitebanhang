<?php 
    include('modules/config.php');
    session_start();
    //session_destroy();
    if(isset($_POST['login'])){
        $user=$_POST['user'];
        $pass = $_POST['pass'];
        $sql = "select * from admin where username='$user' and password = '$pass'";
        $query = mysqli_query($con,$sql);
        $nums= mysqli_num_rows($query);
        if($nums > 0){
            $_SESSION['dangnhap']=$user;
            header('location:index.php');
            
        }else{
         header('location:login.php');   
        }
    }
    
?>
<form action="" method="post">
<center>
<table width="200" border="1">
<tr>
	<td colspan="2" align="center">Đăng nhập</td>
</tr>
<tr>
	<td>Username</td>
	<td>
        <input type="text" name="user" />
    </td>
</tr>
<tr>
	<td>Password</td>
	<td>
        <input type="password" name="pass"/>
    </td>
</tr>
<tr>
	<td colspan="2" align="center">
        <input type="submit" name="login" value="Login" />
    </td>
</tr>
</table>
</center>
</form>

