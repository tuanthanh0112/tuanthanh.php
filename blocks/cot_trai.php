<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#">Tin xem nhiều</a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content"> 
            <?php 
                $LayTinXemNhieu_BayLan = LayTinXemNhieu_BayTin();
                while ($row_LayTinXemNhieu_BayLan = mysqli_fetch_assoc($LayTinXemNhieu_BayLan)) {
             ?>      	
            <div class="col1">
            	<div class="news">
                  <img class="images_news" src="upload/tintuc/<?php echo $row_LayTinXemNhieu_BayLan['urlHinh']; ?>"  />
                    <h3 class="title" ><a href="index.php?chitiettin&idTin=<?php echo $row_LayTinXemNhieu_BayLan['idTin'] ?>"><?php echo $row_LayTinXemNhieu_BayLan['TieuDe']; ?></a><span class="hit"><?php echo $row_LayTinXemNhieu_BayLan['SoLanXem']; ?></span></h3>
                    <div class="clear"></div>
				</div>
            </div> 

        <?php } ?>

        </div>
    </div>
</div>
<div class="clear"></div>

