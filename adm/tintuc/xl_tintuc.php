<?php
$thongbao="";
if(isset($_POST['goihamxuly']))
{
	$hanhdong=$_POST['goihamxuly'];
	if($hanhdong=='xoatintuc')
		$thongbao=xoa_tintuc();
		
	else if($hanhdong=='themtintuc')
		$thongbao=them_tin_tuc();
	
	else if($hanhdong=='suatintuc')
		$thongbao=sua_tintuc();
}
//ham xoa tin tuc
function xoa_tintuc()
{	
	global $ung;
	if(isset($_POST['matintuc']))
		$matintuc=$_POST['matintuc'];
	
		$strSQL="DELETE FROM tin_tuc WHERE ma_tt ={$matintuc}";
		mysql_query($strSQL,$ung);
	return "B?n Ðã Xóa Thành Công Tin T?c Này!";
}

//ham them tin tuc
function them_tin_tuc()
{
	global $ung;
	if(isset($_POST['tieudetintuc']))
		$tieudetintuc=$_POST['tieudetintuc'];
		
	if(isset($_POST['hinhanh']))
		$hinhanh=$_POST['hinhanh'];
		
	if(isset($_POST['noidungtintuc']))
		$noidungtintuc=$_POST['noidungtintuc'];
	
	$strSQL="INSERT INTO tin_tuc(tieu_de,hinh_anh,noi_dung) VALUES('{$tieudetintuc}','{$hinhanh}','{$noidungtintuc}')";
	mysql_query($strSQL,$ung);
	
	return "Ðã Thêm Thành Công Tin T?c Này";
}
// ham sua tin tuc
function sua_tintuc()
{
		global $ung;
	if(isset($_POST['matt']))
		$matt=$_POST['matt'];
		
	if(isset($_POST['tieudetintuc']))
		$tieudetintuc=$_POST['tieudetintuc'];
		
	if(isset($_POST['hinhanh']))
		$hinhanh=$_POST['hinhanh'];
		
	if(isset($_POST['noidungtintuc']))
		$noidungtintuc=$_POST['noidungtintuc'];
	
	$strSQL="UPDATE tin_tuc SET tieu_de='{$tieudetintuc}',hinh_anh='{$hinhanh}',noi_dung='{$noidungtintuc}' WHERE ma_tt={$matt}";	
	mysql_query($strSQL,$ung);
	
	return "B?n Ðã S?a Thành Công Tin T?c Này!";
		
}
//in thong bao

if($thongbao !="")
{
echo "<div style='width:587px; margin-left:3px; margin-right:3px;'>";
echo "<table width='587' cellpadding='0' cellspacing='0' border='0' style='border:#E9E9E9 1px solid; margin-top:3px;'>";
echo "<tr>";
echo "<td>";

echo "<p class='pp'><center><span style='color:#FF9900;'>{$thongbao}</span>"; 
echo "<br />";
echo "<br />";
?>
<center><a href="#" onclick="adm_chuyentrang('quanlytintuc')">B?m Vào Ðây Ð? V? Trang Qu?n Lý Tin T?c</a></center>
<?php
echo "</p>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</div>";
}

?>
