<!-- box cat -->
 <?php $Lay_BaLoaiTin_NgauNhien = Get_BaLoaiTien_NgauNhien();
    while ($row_Lay_BaLoaiTin_NgauNhien = mysqli_fetch_assoc($Lay_BaLoaiTin_NgauNhien) ){  
        $idLT = $row_Lay_BaLoaiTin_NgauNhien['idLT']             
     ?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#"><?php echo $row_Lay_BaLoaiTin_NgauNhien['Ten'];?></a>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                    <?php 
                        $TinMoiNhat_TheoLoaiTin_MotTin = TinMoiNhat_TheoLoaiTin_MotTin($idLT);
                        $row_TinMoiNhat_TheoLoaiTin_MotTin = mysqli_fetch_assoc($TinMoiNhat_TheoLoaiTin_MotTin)
                    ?>
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_TinMoiNhat_TheoLoaiTin_MotTin['idTin']; ?>"> <?php echo  $row_TinMoiNhat_TheoLoaiTin_MotTin['TieuDe']; ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_TinMoiNhat_TheoLoaiTin_MotTin['urlHinh']; ?>" align="left" />
                    <div class="des"><?php echo  $row_TinMoiNhat_TheoLoaiTin_MotTin['TomTat'] ;?> </div>                    
                    <div class="clear"></div>
                   
                </div>
            </div>
            <div class="col2">
            <?php 
                $TinMoiNhat_TheoLoaiTin_BonTin = TinMoiNhat_TheoLoaiTin_BonTin($idLT);
                while($row_TinMoiNhat_TheoLoaiTin_BonTin =mysqli_fetch_assoc($TinMoiNhat_TheoLoaiTin_BonTin)){
             ?>
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_TinMoiNhat_TheoLoaiTin_BonTin['idTin']; ?>"><?php echo $row_TinMoiNhat_TheoLoaiTin_BonTin['TieuDe']; ?></a></h3>
            <?php } ?>
            </div> 
           
        </div>
    
    </div>

</div>
 
<div class="clear"></div>
<!-- //box cat -->
<?php } ?>