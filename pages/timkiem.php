<?php    
    if (isset($_GET['trang'])) {
        $trang = $_GET['trang'];
    }
    else{
        $trang = 1;
    }
    $TuKH = $_GET['txtSearch'];
    $TinCanTimKiem = DanhSachTin_TheoTuKhoa($TuKH);
    $SoTinMotTrang = 6;
    $SoTin = mysqli_num_rows($TinCanTimKiem);
    $SoTrang = ceil($SoTin / $SoTinMotTrang);
    $from= ($trang - 1) * $SoTinMotTrang;
    $TinTK = DanhSachTin_TimKiem_PhanTrang($TuKH, $from, $SoTinMotTrang);
    while($row_TinTrongLoai = mysqli_fetch_assoc($TinTK)){    
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
    <span class ="text-info">&nbsp;</span>
    <?php 
        for ($i=1; $i <= $SoTrang; $i++) { 
     ?>
     <a <?php if ($trang== $i) {echo "style ='background-color: #353b48;'";}?>
         href="index.php?p=timkiem&txtSearch=<?php echo $TuKH;?>&trang=<?php echo $i;?>"><?php echo $i;?></a>
 <?php } ?>
 <span class="text-info"></span>
</div>

