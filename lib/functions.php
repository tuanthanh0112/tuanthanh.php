<?php 
	function LayTinMoiNhat_MotTin(){
		global $conn;
		$sql = "SELECT * FROM tin ORDER BY idTin DESC LIMIT 0,1";
		return mysqli_query($conn, $sql);
	}
	function LayTinMoiNhat_bayTin(){
		global $conn;
		$sql = "SELECT * FROM tin ORDER BY idTin DESC LIMIT 1,7";
		return mysqli_query($conn, $sql);
	}
	function LayTinXemNhieu_BayTin(){
		global $conn;
		$sql = "SELECT * FROM tin ORDER BY SoLanXem DESC LIMIT 0,7";
		return mysqli_query($conn, $sql);
	}
	function HinhQuangCao_QC($ViTri){
		global $conn;
		$sql = "SELECT * FROM quangcao WHERE vitri = $ViTri";
		return mysqli_query($conn, $sql);
	}
	function TienLienQuan_TinDangXem($idTin, $idLT, $SoTin){
		global $conn;
		$sql = "SELECT * FROM tin WHERE idTin <> $idTin AND idLT = $idLT  ORDER BY RAND() LIMIT 0,$SoTin";
		return mysqli_query($conn, $sql);
	}
	function Get_BaLoaiTien_NgauNhien(){
		global $conn;
		$sql = "SELECT * FROM loaitin ORDER BY RAND() LIMIT 0,3";
		return mysqli_query($conn, $sql);
	}
	function TinMoiNhat_TheoLoaiTin_MotTin($idLT){
		global $conn;
		$sql = "SELECT * FROM tin WHERE idLT = $idLT ORDER BY idTin DESC LIMIT 0,1";
		return mysqli_query($conn, $sql);
	}
	function TinMoiNhat_TheoLoaiTin_BonTin($idLT){
		global $conn;
		$sql = "SELECT * FROM tin WHERE idLT = $idLT ORDER BY idTin DESC LIMIT 1,4";
		return mysqli_query($conn, $sql);
	}
	function GET_TenTheLoai()
	{
		global $conn;
		$sql = "SELECT * FROM theloai";
		return mysqli_query($conn, $sql);
	}	
	function GET_BonLoaiTin_Theo_idLT($idTL)
	{
		global $conn;
		$sql = "SELECT * FROM loaitin WHERE idTL = $idTL ORDER BY idLT  LIMIT 0,3";
		return mysqli_query($conn, $sql);
	}
	function DanhSachTheLoai()
	{
		global $conn;
		$sql = "SELECT * FROM theloai";
		return mysqli_query($conn, $sql);
	}
	function DanhSachLoaiTin_TheoTheLoai($idTL)
	{
		global $conn;
		$sql = "SELECT * FROM loaitin WHERE idTL = $idTL";
		return mysqli_query($conn, $sql);
	}
	function DanhSachLoaiTin_TheoLoaiTin($idLT)
	{
		global $conn;
		$sql = "SELECT * FROM loaitin WHERE idLT = $idLT";
		return mysqli_query($conn, $sql);
	}
	function TinMoiNhat_TheoTheLoai_MotTin_content($idTL){
		global $conn;
		$sql = "SELECT * FROM tin WHERE idTL = $idTL ORDER BY idTin DESC LIMIT 0,1";
		return mysqli_query($conn, $sql);
	}
	function TinMoiNhat_TheoTheLoai_BonTin_content($idTL){
		global $conn;
		$sql = "SELECT * FROM tin WHERE idTL = $idTL ORDER BY RAND() DESC LIMIT 1,4";
		return mysqli_query($conn, $sql);
	}
	function DanhSachTin_TheoLoaiTin_Tin($idLT){
		global $conn;
		$sql = "SELECT * FROM tin where idLT = $idLT";
		return mysqli_query($conn, $sql);
	}
	function DanhSachTin_TheoLoaiTin_PhanTrang($idLT, $from, $SoTinMotTrang)
	{
		global $conn;
		$sql = "SELECT * FROM tin WHERE idLT = $idLT LIMIT $from, $SoTinMotTrang";
		return mysqli_query($conn, $sql);
	}

	function TenTheLoai_NhomTin($idLT){
		global $conn;
		$sql = "SELECT theloai.TenTL, loaitin.Ten FROM theloai,loaitin WHERE theloai.idTL = loaitin.idTL AND idLT = $idLT";
		return mysqli_query($conn, $sql);
	}
	function DanhSachTin_TheoTuKhoa($TuKH){
		global $conn;
		$sql = "SELECT * FROM tin WHERE TieuDe REGEXP '$TuKH'";
		return mysqli_query($conn,$sql);
	}
	function DanhSachTin_TimKiem_PhanTrang($TuKH, $from, $SoTinMotTrang)
	{
		global $conn;
		$sql = "SELECT * FROM tin WHERE TieuDe REGEXP '$TuKH' LIMIT $from, $SoTinMotTrang";
		return mysqli_query($conn, $sql);
	}
	function Get_LoaiTin_Theo_idLT($idTL)
	{
		global $conn;
		$sql = "SELECT * FROM loaitin WHERE idTL = $idTL ORDER BY idLT ";
		return mysqli_query($conn, $sql);
	}
	function GetChiTietTin($idTin){
		global $conn;
		$sql = "SELECT * FROM tin WHERE idTin = $idTin";
		return mysqli_query($conn, $sql);
	}
	function GetChiTietTin_TheoLoaiTin($idLT){
		global $conn;
		$sql = "SELECT * FROM tin WHERE idLT = $idLT ORDER BY RAND() LIMIT 0,3 ";
		return mysqli_query($conn, $sql);
	}
 ?>