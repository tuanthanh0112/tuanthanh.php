<?php    
    $idLT = $_GET['idLT'];
    if (isset($_GET['trang'])) {
        $trang = $_GET['trang'];
    }
    else{
        $trang = 1;
    }
    $TinTrongLoai = DanhSachTin_TheoLoaiTin_Tin($idLT);
    $SoTinMotTrang = 4;
    $SoTin = mysqli_num_rows($TinTrongLoai);
    $SoTrang = ceil($SoTin / $SoTinMotTrang);
    $from= ($trang - 1) * $SoTinMotTrang;
    $Tin = DanhSachTin_TheoLoaiTin_PhanTrang($idLT, $from, $SoTinMotTrang);

    $TenTheLoai_LoaiTin = TenTheLoai_NhomTin($idLT);
    $row_TenTheLoai_LoaiTin = mysqli_fetch_assoc($TenTheLoai_LoaiTin);
    ?>
    <div>
        trang chủ >> <?php echo $row_TenTheLoai_LoaiTin['TenTL']; ?> >> <?php echo $row_TenTheLoai_LoaiTin['Ten'];?>
    </div>

    <?php
    while($row_TinTrongLoai = mysqli_fetch_assoc($Tin)){    
 ?>
<div class="box-cat">
	<div class="cat1">
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            	<div class="news">
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_TinTrongLoai['idTin'];?>"><?php echo $row_TinTrongLoai['TieuDe']; ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_TinTrongLoai['urlHinh'];?>" align="left" />
                    <div class="des"><?php echo $row_TinTrongLoai['TomTat']; ?></div>
                    <div class="clear"></div>
				</div>
            </div>
        </div>
    </div>
</div>
<!-- box cat-->
<div class="clear"></div>
<?php } ?>
<style type="text/css" media="screen">
    #phantrang{
        text-align: center;
    }
    #phantrang a{
        padding: 5px;
        margin-right: 5px;
        border: 1px solid black;
        color: black;
    }
</style>
<div id="phantrang">
    <?php 
        for ($i=1; $i <= $SoTrang; $i++) { 
     ?>

     <a id ="page-link" <?php if ($trang== $i) {echo "style ='background-color: #353b48;'";}?>
         href="index.php?p=tintrongloai&idLT=<?php echo $idLT;?>&trang=<?php echo $i;?>"><?php echo $i;?></a>
 <?php } ?>
</div>

