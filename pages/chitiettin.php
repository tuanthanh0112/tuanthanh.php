<?php 
  if(isset($_GET['idTin'])){
    $idTin = $_GET['idTin'];
  }
  $chitiettin = GetChiTietTin($idTin);
  $row_idTin = mysqli_fetch_assoc($chitiettin);
   $idLT = $row_idTin['idLT'];
 ?>
 <h1 class="title"><?php echo $row_idTin['TieuDe']; ?></h1>
<div class="des">
<?php echo $row_idTin['TomTat']; ?>
</div>
<!--noi dung-->
  <table align="center" border="0" cellpadding="3" cellspacing="0">
  <tbody>
    <tr>
      <td><img alt="mh17-7176-1406565111.jpg" data-natural-="" src="upload/tintuc/<?php echo $row_idTin['urlHinh']; ?>" data-width="500" data-pwidth="480"></td>
    </tr>
    <!-- <tr>
      <td><p>Xác máy bay MH17 tại hiện trường hầu như không được bảo vệ. Ảnh:<em> Reuters</em></p></td>
    </tr> -->
  </tbody>
</table>
<?php echo $row_idTin['Content']; ?>
<div class="clear"></div>
<a class="btn_quantam" id="vne-like-anchor-1000000-3023795" href="#" total-like="21"></a>
<div class="number_count"><span id="like-total-1000000-3023795">21</span></div>
<!--face-->
<div class="left"><div class="fb-like fb_iframe_widget" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-href="http://vnexpress.net/tin-tuc/the-gioi/ukraine-gianh-kiem-soat-nhieu-khu-vuc-gan-hien-truong-mh17-3023795.html" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;href=http%3A%2F%2Fvnexpress.net%2Ftin-tuc%2Fthe-gioi%2Fukraine-gianh-kiem-soat-nhieu-khu-vuc-gan-hien-truong-mh17-3023795.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=true&amp;width=450"></div></div>
<!--twister-->
<div class="left"></div>
<!--google-->
<div class="left"><div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background: transparent;"></div></div>

<div class="clear"></div>
<div id="tincungloai">
<div class="clear"></div>
	 <ul>
      <?php 
          $Tincungloaii = GetChiTietTin_TheoLoaiTin($idLT);
          while ($row_Tincungloaii = mysqli_fetch_assoc($Tincungloaii)) {
       ?>
        <li>       
             <a href="index.php?p=chitiettin&idTin=<?php echo $row_Tincungloaii['idTin']; ?>">
                  <img src="upload/tintuc/<?php echo $row_Tincungloaii['urlHinh']; ?>" alt="load hinh">
             </a> <br />
       <a class="title" href="index.php?p=chitiettin&idTin=<?php echo $row_Tincungloaii['idTin']; ?>"><?php echo $row_Tincungloaii['TieuDe']; ?></a>
             <span class="no_wrap">   
        </li>
        <?php 
          }
        ?>
        
    </ul>
</div>
<div class="clear"></div> 