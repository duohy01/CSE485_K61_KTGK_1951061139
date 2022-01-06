<?php
include 'database.php';

if(isset($_POST['save']))
{	 
	 	$name=$_POST['name'];
		$birth=$_POST['birth'];
		$sex=$_POST['sex'];
		$trdo=$_POST['trdo'];
		$chm=$_POST['chm'];
		$hh=$_POST['hh'];
        $hv=$_POST['hv'];
		$cq=$_POST['cq'];


		$sql = "INSERT INTO giangvien (magv, hovaten, ngaysinh,gioitinh, trinhdo, chuyenmon, hocham, hocvi, coquan) VALUES ('$name','$birth','$sex','$trdo','$chm','$hh','$hv','$cq')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}


if(count($_POST)>0){
	if($_POST['type']==1){
		$name=$_POST['name'];
		$birth=$_POST['birth'];
		$sex=$_POST['sex'];
		$trdo=$_POST['trdo'];
		$chm=$_POST['chm'];
		$hh=$_POST['hh'];
        $hv=$_POST['hv'];
		$cq=$_POST['cq'];

		$sql = "INSERT INTO giangvien (magv, hovaten, ngaysinh,gioitinh, trinhdo, chuyenmon, hocham, hocvi, coquan) VALUES ('$name','$birth','$sex','$trdo','$chm','$hh','$hv','$cq')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$birth=$_POST['birth'];
		$sex=$_POST['sex'];
		$trdo=$_POST['trdo'];
		$chm=$_POST['chm'];
		$hh=$_POST['hh'];
        $hv=$_POST['hv'];
		$cq=$_POST['cq'];
		$sql = "UPDATE 'crud' SET 'name'='$name','birth'='$birth','sex'='$sex','trdo'='$trdo' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>