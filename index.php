<?php 
    include_once 'lib/conn.php';
    include_once 'lib/functions.php';
    if (isset($_GET['p'])) {
        $p = $_GET['p'];
    }else{
        $p= ' ';
    }
 ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lap Trinh PHP - Web Tin tức</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" href="ddsmoothmenu.css"/>
<link rel="stylesheet" href="ddsmoothmenu.css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="ddsmoothmenu.js">
    /***********************************************
    * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
    * Please keep this notice intact
    * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
    ***********************************************/
</script>
<script type="text/javascript">

ddsmoothmenu.init({
    mainmenuid: "smoothmenu1", //menu DIV id
    orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
    classname: 'ddsmoothmenu', //class added to menu's outer DIV
    //customtheme: ["#1c5a80", "#18374a"],
    contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
    mainmenuid: "smoothmenu2", //Menu DIV id
    orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
    classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
    method: 'toggle', // set to 'hover' (default) or 'toggle'
    arrowswap: true, // enable rollover effect on menu arrow images?
    //customtheme: ["#804000", "#482400"],
    contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
</head>
<body>
    <div id="wrap-vp">
    	<div id="header-vp">
        	<div id="logo"><img src="images/logo.gif" /></div>
        </div>
        
        
        	<!--block/menu.php-->
            <?php include_once 'blocks/menu.php'; ?>
       
        <div id="midheader-vp">
            <div id="left">
        	    <ul class="list_arrow_breakumb">
            	   <li class="start">
                        <a href="javascript:;">Trang nhất</a>
                        <span class="arrow_breakumb">&nbsp;</span>
                    </li>
                </ul>
            </div>
            <div id="right">
    			<!--blocks/thongtinchung.php-->
                <?php include_once 'blocks/thongtinchung.php'; ?>
            </div>
        </div>
        <div class="clear"></div>

        <div id="slide-vp">
        	<!--blocks/top_trang_chu.php-->
            <?php include_once 'blocks/top_trang_chu.php';?>
            <div id="slide-right">
            <!--blocks/quangcao_top_phai.php-->
            <?php include_once 'blocks/quangcao_top_phai.php'; ?>
            </div>
        </div>
      	<div id="content-vp">
        	<div id="content-left">
    		    <!--blocks/cot_trai.php-->
                <?php include_once 'blocks/cot_trai.php'; ?>
            </div>
            <div id="content-main">
    			
    			<!--PAGES-->
                 <?php 
                    switch ($p) {
                        case'chitiettin':
                            include_once'pages/chitiettin.php';
                            break;
                        case'tintrongloai':
                            include_once 'pages/tintrongloai.php';
                            break;
                        case'timkiem':
                            include_once 'pages/timkiem.php';
                            break;
                        default:
                            include_once 'pages/trangchu.php';
                            break;
                    }
                 ?>
            </div>
            <div id="content-right">
        		<!--blocks/cot_phai.php-->
                <?php include_once 'blocks/cot_phai.php'; ?>

            </div>

            <div class="clear"></div>   	
        </div>
        
         <div id="thongtin">
        	<!--blocks/thongtindoanhnghiep.php-->
            <?php include_once 'blocks/thongtindoanhnghiep.php'; ?>
        </div>
        <div class="clear"></div>
        <div id="footer">
        	<!--blocks/footer.php-->

            <?php include_once 'blocks/footer.php'; ?>
            <div class="ft-bot">
                <div class="bot1"><img src="images/logo.gif" /></div>
                <div class="bot2">
                         <p>© <span>Copyright 1997 VnExpress.net,</span>  All rights reserved</p>
                         <p>® VnExpress giữ bản quyền nội dung trên website này.</p>
                </div>
                <div class="bot3">
                    
                         <p><a href="http://fptad.net/qc/V/vnexpress/2014/07/">VnExpress tuyển dụng</a>   <a href="http://polyad.net/Polyad/Lien-he.htm">Liên hệ quảng cáo</a> / <a href="/contactus">Liên hệ Tòa soạn</a></p>
                         <p><a href="http://vnexpress.net/contact.htm" target="_blank" style="color: #686E7A;font: 11px arial;padding: 0 4px;text-decoration: none;">Thông tin Tòa soạn: </a><span>0123.888.0123</span> (HN) - <span>0129.233.3555</span> (TP HCM)</p>
                </div>
            </div>
        </div> 
    </div>
</body>
</html>
