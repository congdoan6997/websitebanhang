<?php
	$sql= "select * from loaisp order by thutu";
	$result=mysqli_query($con,$sql);
?>

<p id="typeproduct">Loại sản phẩm</p>
<div class="listproduct">
	<ul>
    <?php while($row=mysqli_fetch_assoc($result)){
    ?>
		<li><a href="index.php?view=infotype&id=<?php echo $row['id_loaisp']; ?>"><?php echo $row['tenloaisp']; ?></a></li>
        <?php
	};
?>
  	</ul>
</div>
<?php
	$sql1 = "select * from hieusp order by thutu";
	$result1 = mysqli_query($con,$sql1);

?>
<p id="typeproduct">Hiệu sản phẩm</p>
<div class="listproduct">
 	<ul>
	 	<?php
			while($row1=mysqli_fetch_assoc($result1)){
		 ?>
		<li><a href="index.php?view=thongtinhieu&id=<?php echo $row1['id_hieusp']; ?>"><?php echo $row1['tenhieusp'] ?></a></li>
		<?php
			};
		?>
	</ul>
</div>