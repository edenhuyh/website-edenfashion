<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css2/style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body>
<header class="header">
<?php include 'head2.php'; ?>
      
</header>

    <div class="main">
      
        <div class="menu">
        <h3>menu admin</h3>
      
        <div class="tql">
            <img src="images-logo/home.jpg" alt="">
            <a href="trangchu.php">Trang Chủ Báng Hàng</a>
        </div>
        <div class="tql">
            <img src="images-logo/tk.png" alt="">
            <a  href="admin.php">Thống Kê</a>
        </div>

        <div class="tql">
            <img src="images-logo/sp.png" alt="">
            <a href="products.php">Quản Lý Danh Sách Sản Phẩm</a>
        </div>
          
       
        <div class="tql">
            <img src="images-logo/qlnv.png" alt="">
            <a href="mana-admin.php">Quản Lý Nhân Viên</a>
        </div>
          
        <div class="tql">
            <img src="images-logo/qlsk.jpg" alt="">
            <a href="user.php">Quản Lý Khách Hàng</a>
        </div>

        <div class="tql">
           <img src="images-logo/hd.jpg" alt="">
        <a href="hoadon.php">Quản Lý Hóa Đơn</a>
        </div>

           
        

        </div>
        
        <div class="main-right">
        <h3>QUẢN LÝ THÔNG TIN NHÂN VIÊN</h3>

        
        <div class="product">

            <div class="container mt-4">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nhân Viên</th>
                      <th>Tên Nhân Viên</th>
                      <th>Số Điện Thoại</th>
                      <th>Phân quyền</th>
                      <th>Quản Lý</th>
                    </tr>
                  </thead>
                  <tbody>
                    <div class="nasa">
<?php
	$severname = "localhost";
	$username = "root";
	$password = "";
	$database = "shopquanao";
		
	$ketnoi = mysqli_connect($severname,$username,$password, $database);

?>
<?php
	$sql = "SELECT * FROM employee";
	$ketqua = $ketnoi->query($sql);
	if ($ketqua->num_rows > 0) {
	while($row = $ketqua->fetch_assoc()) {
		$id = $row['id'];
		$ten = $row['fullname'];
		$email = $row['email'];
		$phone = $row['phone'];
		$role = $row['role_id'];
		
		$sqll = "SELECT * FROM role WHERE id = $role";
		$ketquaa = $ketnoi->query($sqll);
		if ($ketquaa->num_rows > 0) {
		while($row = $ketquaa->fetch_assoc()) {
			$quyen = $row['name'];
			
		}}
                    echo"<tr>";
                    echo"<td class='uff'>$id</td>";
                      echo"<td>$ten</td>";
                      echo"<td>$phone</td>";
                      echo"<td> $quyen </td>";
                      echo"<td><button>Xóa</button> <a href='phanquyen.php'><button type='margin: 5px;'>Sữa</button></a></td>";
                    echo"</tr>";	
	}}
		?>


                </div>
                    
                  </tbody>
                </table>
                <div class="adc">
                    <a href="themnv.php"><button class="end" >Thêm Nhân viên</button></a>
                    
                    <a href="phanquyen.php"><button class="end"> Cập Nhật</button></a>
                   
                </div>
              </div>

        </div>

        </div>
    </div>
<footer class="foter">
<h4>shoppingchomoinha@gmail.com</h4>
</footer>
</body>
</html>