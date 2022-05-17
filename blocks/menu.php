<a class="animateddrawer" id="ddsmoothmenu-mobiletoggle" href="#">
<span></span>
</a>
<div id="smoothmenu1" class="ddsmoothmenu">
<ul>
<li><a href="index.php">Trang chủ</a></li>
<?php 
	$Lay_TenTheLoai = GET_TenTheLoai();
	while ($row_Lay_TenTheLoai = mysqli_fetch_assoc($Lay_TenTheLoai)) {
	$idTL = $row_Lay_TenTheLoai['idTL'];
 ?>
<li><a href="#"><?php echo $row_Lay_TenTheLoai['TenTL']; ?></a>
  <ul>
  	<?php 
  	$Lay_LoaiTin_Theo_idLT = Get_LoaiTin_Theo_idLT($idTL);
  	while ($row_Lay_LoaiTin_Theo_idLT = mysqli_fetch_assoc($Lay_LoaiTin_Theo_idLT)) {
  	 ?>
  	<li> <a href="index.php?p=tintrongloai&idLT=<?php echo $row_Lay_LoaiTin_Theo_idLT['idLT'];?>"><?php echo $row_Lay_LoaiTin_Theo_idLT['Ten'] ?></a>
    </li>
  	<?php } ?>
  </ul>
</li>
<?php } ?>
</ul>
<br style="clear: left"/>
</div>