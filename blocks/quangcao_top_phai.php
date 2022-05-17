<?php 
	$HinhQuangCao_TopPhai = HinhQuangCao_QC(1);
	while ($row_HinhQuangCao_TopPhai = mysqli_fetch_assoc($HinhQuangCao_TopPhai)){	
 ?>
	<a href="<?php echo $row_HinhQuangCao_TopPhai['Url'];?>">
		<img width="280"src="upload/quangcao/<?php echo $row_HinhQuangCao_TopPhai['urlHinh'];?>"/></a>
	<div style="height:10px"></div>
<?php } ?>