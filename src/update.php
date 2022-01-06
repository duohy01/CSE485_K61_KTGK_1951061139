<?php
include ('../backend/config.php');
include('../template/header.php');

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE giangvien set name='" . $_POST['name'] . "', birth='" . $_POST['birth'] . "', sex='" . $_POST['sex'] . "' ,trdo='" . $_POST['trdo'] . "',chm='" . $_POST['chm'] . "',hh='" . $_POST['hh'] . "',hv='".$_POST['hv']."',cq ='".$_POST['cq']."'WHERE magv='" . $_GET['magv'] . "'");
Header('location: http://localhost/CSE485_K61_KTGK_1951061139/');
}else {
}

?>
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                       <a href="http://localhost/CSE485_K61_KTGK_1951061139" style="color:#fff"><i class="fas fa-arrow-left"></i> Back</a> <h2>Update</h2>
                </div>
            </div>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<?php $result = mysqli_query($conn,"SELECT * FROM giangvien WHERE magv='" . $_GET['magv'] . "'");
while($row = mysqli_fetch_array($result)) {

?>
             <div class="mb-3">
            <label for="rname" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" id="name" name='name'>
            </div>
            <div class="mb-3">
            <label for="birth" class="form-label">Ngày sinh</label>
            <input type="text" class="form-control" id="birth" name="birth">
            </div>
            <div class="mb-3">
            <label for="sex" class="form-label">Giới tính</label>
            <input type="text" class="form-control" id="sex" name='sex'>
            </div>
            <div class="mb-3">
            <label for="trdo" class="form-label">Trình độ</label>
            <input type="text" class="form-control" id="trdo" name="trdo" >
            </div>
            <div class="mb-3">
            <label for="chm" class="form-label">Chuyên môn</label>
            <input type="text" class="form-control" id="chm" name="chm" >
            </div>
            <div class="mb-3">
            <label for="hh" class="form-label">Học hàm</label>
            <input type="text" class="form-control" id="hh" name="hh" >
            <div class="mb-3">
            <label for="hv" class="form-label">Học vị</label>
            <input type="text" class="form-control" id="hv" name="hv" >
            <div class="mb-3">
            <label for="cq" class="form-label">Cơ quan/Đơn vị</label>
            <input type="text" class="form-control" id="cq" name="cq" >
            </div>
            <?php
				};
				?>
            <input type="submit" class="btn btn-primary" name='save' value="Submit">
        </form>	
    </div>
<?php 
include('../template/header.php')

?>