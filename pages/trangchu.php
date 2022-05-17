<?php 
    $TheLoai = DanhSachTheLoai();
    while ($row_TheLoai = mysqli_fetch_assoc($TheLoai)) {
        $idTL = $row_TheLoai['idTL'];
 ?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href=""><?php echo $row_TheLoai['TenTL'];?></a>
        </div>
        <div class="child-cat">
            <?php 
                $LoaiTin_TheoTheLoai = DanhSachLoaiTin_TheoTheLoai($idTL);
                while ($row_LoaiTin_TheoTheLoai = mysqli_fetch_assoc($LoaiTin_TheoTheLoai)) {
            ?>
        	<a href="index.php?p=tintrongloai&idLT=<?php echo $row_LoaiTin_TheoTheLoai['idLT'];?>"><?php echo $row_LoaiTin_TheoTheLoai['Ten'] ; ?></a>
        <?php } ?>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                    <?php 
                        $TinMoiNhat_TheoLoaiTin_MotTin = TinMoiNhat_TheoTheLoai_MotTin_content($idTL);
                        $row_TinMoiNhat_TheoLoaiTin_MotTin = mysqli_fetch_assoc($TinMoiNhat_TheoLoaiTin_MotTin)
                    ?>
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_TinMoiNhat_TheoLoaiTin_MotTin['idTin']; ?>"><?php echo  $row_TinMoiNhat_TheoLoaiTin_MotTin['TieuDe']; ?> </a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_TinMoiNhat_TheoLoaiTin_MotTin['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo  $row_TinMoiNhat_TheoLoaiTin_MotTin['TomTat']; ?></div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
             <?php 
                $TinMoiNhat_TheoLoaiTin_BonTin = TinMoiNhat_TheoTheLoai_BonTin_content($idTL);
                while($row_TinMoiNhat_TheoLoaiTin_BonTin =mysqli_fetch_assoc($TinMoiNhat_TheoLoaiTin_BonTin)){
             ?>
             <p class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_TinMoiNhat_TheoLoaiTin_BonTin['idTin']; ?>"> <?php echo $row_TinMoiNhat_TheoLoaiTin_BonTin['TieuDe']; ?> </a>
            </p> 
        <?php } ?>
            </div>    
        </div>
    </div>
</div>
<div class="clear"></div>
<?php } 
?>