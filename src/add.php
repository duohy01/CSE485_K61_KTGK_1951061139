<?php
include ('../backend/config.php');
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $birth = $_POST['birth'];
	 $sex = $_POST['sex'];
	 $trdo = $_POST['trdo'];
	 $chm = $_POST['chm'];
	 $hh = $_POST['hh'];
	 $hv = $_POST['hv'];
	 $cq = $_POST['cq'];

	 $sql = "INSERT INTO 1951061139_university(magv, hovaten, ngaysinh,gioitinh, trinhdo, chuyenmon, hocham, hocvi, coquan) VALUES ('$name','$birth','$sex','$trdo','$chm','$hh','$hv','$cq')";
	 if (mysqli_query($conn, $sql)) {
		Header('location: http://localhost/CSE485_K61_KTGK_1951061139/');
	 } else {
    Header('location: http://localhost/CSE485_K61_KTGK_1951061139/error.php');

	 }
	 mysqli_close($conn);
}
?>