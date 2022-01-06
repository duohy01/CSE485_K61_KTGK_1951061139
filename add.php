<?php include('backend/config.php'); 
include('template/header.php')
?>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                       <a href="http://localhost/CSE485_K61_KTGK_1951061139" style="color:#fff"><i class="fas fa-arrow-left"></i></a> <h2>Add</h2>
                </div>
            </div>
        <form method="post" action="src/add.php">
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
            <input type="submit" class="btn btn-primary" name='save' value="Submit">
        </form>
    </div>
</div>
<?php 
include('template/footer.php')
?>
