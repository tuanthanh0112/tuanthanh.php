<div class="thongtin-title">
  <div class="right">
    
          <a href="#"><span class="SetHomePage ico_respone_01">&nbsp;</span>Đặt VnExpress làm trang chủ</a>
          
          <a href="#"><span class="top">&nbsp;</span>Về đầu trang</a>
       
    </div>
</div>
<div class="thongtin-content">
  <?php 
        $Lay_TenTheLoai = GET_TenTheLoai();
        while($row_Lay_TenTheLoai = mysqli_fetch_assoc($Lay_TenTheLoai)) 
        { 
          $idTL = $row_Lay_TenTheLoai['idTL'];
        ?>
  <ul class="ulBlockMenu">                 
                <li class="liFirst">
                   <h2>                     
                      <a class="mnu_giaoduc" href="/tin-tuc/giao-duc/"><?php echo $row_Lay_TenTheLoai['TenTL']; ?></a>
                   </h2>                   
                </li>                 
                <?php 
                    
                    $Lay_BonLoaiTin_Theo_idLT = GET_BonLoaiTin_Theo_idLT($idTL);
                    while($row_Lay_BonLoaiTin_Theo_idLT = mysqli_fetch_assoc($Lay_BonLoaiTin_Theo_idLT)) {
                ?>
                <li class="liFollow">
                   <h2>
                      <a href="index.php?p=tintrongloai&idLT=<?php echo $row_Lay_BonLoaiTin_Theo_idLT['idLT'];?>"><?php echo $row_Lay_BonLoaiTin_Theo_idLT['Ten']; ?></a>
                   </h2>
                </li>
              <?php } ?>
  </ul> 
  <?php } ?>                                       

</div>




