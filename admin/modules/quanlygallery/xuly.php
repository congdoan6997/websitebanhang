<?php
    include('../config.php');
    if(isset($_POST['upload'])){
        $id = $_GET['id'];        
        if(array_sum($_FILES['file']['error']) > 0) {        
            echo 'Chọn ít nhất 1 ảnh';
        }else{
            $type = array('jpeg','jpg','png','gif','bmp');
            foreach ($_FILES['file']['name'] as $key => $name) {
                $size = $_FILES['file']['size'][$key];
                $tmp = $_FILES['file']['tmp_name'][$key];
                $explode = explode('.',$name);
                $ext = end($explode);
                $hinhanh = basename($explode[0].time().'.'.$ext);
                $path = 'uploads/'.$hinhanh;
                if(in_array($ext,$type)){
                    $maxsize = 4000000;
                    if ($size <= $maxsize ) {
                        if(!file_exists('uploads')){
                            mkdir('uploads');
                        }
                        if(move_uploaded_file($tmp,$path)){
                            $sql = "insert into gallery (id_sp, hinhanh) values ('$id','$hinhanh') ";
                            mysqli_query($con,$sql);
                            header('location:../../index.php?quanly=gallery&ac=them&id='.$id);
                        }
                    }else {
                        echo 'File quá lớn';
                    }
                }else{
                    echo 'File không hợp lệ';
                }
            }
        }
    }
?>