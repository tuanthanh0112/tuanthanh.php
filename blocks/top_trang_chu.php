<div id="slide-left">
        	<div id="slideleft-main">
                <?php 
                    $tinmoinhat = LayTinMoiNhat_MotTin();
                    $row_tinmoinhat = mysqli_fetch_assoc($tinmoinhat);
                 ?>
                <img src="upload/tintuc/<?php echo  $row_tinmoinhat['urlHinh'];?>"  /><br />
                <h2 class="title"><a href="index.php?p=chitiettin&idTin = <?php echo $row_tinmoinhat['idTin'];?>"><?php echo $row_tinmoinhat['TieuDe'];?></a> </h2>
                <div class="des">
                   <?php echo $row_tinmoinhat['TomTat'];?>
                </div>
                <?php
                  $idTin = $row_tinmoinhat['idTin'];
                  $idLT = $row_tinmoinhat['idLT'];  
                  $TinLienQuan_TinDangXem = TienLienQuan_TinDangXem($idTin, $idLT,1);
                  $row_TinLienQuan_TinDangXem = mysqli_fetch_assoc($TinLienQuan_TinDangXem);
                 ?>
            	<p class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_TinLienQuan_TinDangXem['idTin']; ?>"><?php echo $row_TinLienQuan_TinDangXem['TieuDe'];?></a></p>
                
        	</div>
            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common">
            <ul>
              <?php 
                $tinmoinhat_baytin = LayTinMoiNhat_bayTin();
                while( $row_tinmoinhatbaytin = mysqli_fetch_assoc($tinmoinhat_baytin)){
               ?>
               <li>
                <div class="title_news">
               		<a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhatbaytin['idTin']; ?>" class="txt_link"> <?php echo $row_tinmoinhatbaytin['TieuDe'];?></a> 
                </div>
              </li>
              <?php } ?>  
            </ul>
            </div>			
            
			<div id="gocnhin">
                <img alt="" src="" width="100%"></a>
                <div class="title_news"></div>
            </div>
                
            </div>
</div>


     