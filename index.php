<?php include('backend/config.php'); 
include('template/header.php')
?>
    <div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Hệ thống quản lý đại học </h2>
					</div>
					<div class="col-sm-6">
						<a href="add.php" class="btn btn-success">Add</a>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>Mã giảng viên</th>
                        <th>Họ và tên</th>
                        <th>Ngày sinh</th>
						<th>Giới tính</th>
						<th>Trình độ</th>
						<th>Chuyên môn</th>	
                        <th>Học hàm</th>
                        <th>Học vị</th>	
                        <th>Cơ quan</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM giangvien");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["magv"]; ?>">
					<td><?php echo $i; ?></td>
					<td><?php echo $row["hovaten"]; ?></td>
					<td><?php echo $row["ngaysinh"]; ?></td>
					<td><?php echo $row["gioitinh"]; ?></td>
					<td><?php echo $row["trinhdo"]; ?></td>					
					<td><?php echo $row["chuyenmon"]; ?></td>
					<td><?php echo $row["hocham"]; ?></td>
                    <td><?php echo $row["hocvi"]; ?></td>					
					<td><?php echo $row["coquan"]; ?></td>
					<td><a href="src/update.php?magv=<?php echo $row["magv"]; ?>">Update</a></td>
					<td><a href="src/delete.php?magv=<?php echo $row["magv"]; ?>">Delete</a></td>

				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			
        </div>
        <div> * GT 1: nam, 0: nữ</div>
        <div class="copyrights ">Duong Hoang Yen</div>
    </div>
<?php 
include('template/footer.php')
?>
                          		                            