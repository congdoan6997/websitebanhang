<h1>Giỏ hàng</h1>
<h3 style="float:right;"><?php 
    session_start();
    if(isset($_SESSION['login'])){       
        echo 'Xin chào:'. $_SESSION['login'];
    }else{
        echo 'Xin chào: Khách hàng';
    }
?>
<h1 style="float:left;"></h1>
<?php 
    if(isset($_GET['add']) && !empty($_GET['add'])){
        $id = $_GET['add'];
        @$_SESSION['cart_'.$id]+=1;
        header('location:index.php?view=giohang');
    }else if(isset($_GET['them'])){
        $id = $_GET['them'];
        $_SESSION['cart_'.$id] ++;
        header('location:index.php?view=giohang');
    }else if(isset($_GET['giam'])){
        $id = $_GET['giam'];
        $_SESSION['cart_'.$id] --;
        header('location:index.php?view=giohang');
    }else if(isset($_GET['xoa'])){
        $id = $_GET['xoa'];
        $_SESSION['cart_'.$id] = 0;
        header('location:index.php?view=giohang');
    }

?>
<table width="100%" border="1" style="border-collapse: collapse;">
<tr>
    <td colspan="8" align="center">Giỏ hàng</td>
</tr>
<tr>
	<td >STT</td>
	<td>Tên sản phẩm</td>
	<td>Đơn giá</td>
	<td>SL</td>
	<td>Tổng tiền</td>
	<td colspan="3">Quản lý</td>

</tr>
<?php
    $i=1;
    $thanhtoan=0;
    foreach($_SESSION as $name => $value){
        if($value >0){
            if(substr($name,0,5) == 'cart_'){
                $id = substr($name,5,strlen($name));
                $sql = "select * from chitietsp where id_sp = '$id'";
                $result  = mysqli_query($con,$sql);
                $row= mysqli_fetch_assoc($result);
?>
<tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $row['tensp']; ?></td>
	<td><?php echo $row['gia']; ?>000 VND</td>
	<td><?php echo $value; ?></td>
	<td><?php $thanhtoan +=$row['gia']*$value; echo $row['gia']*$value; ?>000 VND</td>
	<td>
        <div align ="center">
            <a href="index.php?view=giohang&them=<?php echo $id; ?>">
                <img style="padding: 2px;" width="30" height="30" src="admin\modules\quanlychitietsp\imgs\Hopstarter-Button-Button-Add.ico" alt="">
            </a>
        </div>
    </td>
	<td>
    <div align ="center">
        <a href="index.php?view=giohang&giam=<?php echo $id; ?>">
            <img width="30" height="30" src="admin\modules\quanlychitietsp\imgs\Gakuseisean-Ivista-2-Alarm-Private.ico" alt="">
        </a>
            </div>
    </td>
	<td>
        <a href="index.php?view=giohang&xoa=<?php echo $id; ?>">Xóa</a>
    </td>
</tr>
<?php
            $i++;
            }
        }
    };
?>
<tr>
    <td colspan="4">Thanh toán</td>
    <td><?php echo $thanhtoan; ?>000 VND</td>
    <td colspan="3" >
        <div align="center">
            <a href="index.php?view=thanhtoan">Chấp nhận</a>
        </div>
    </td>
</tr>
</table>