<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css2/style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <title> Quản lý tài khoảng khách Hàng</title>
  
</head>
<body>
<header class="header">
<?php include 'head2.php'; ?>
      
</header> 

    <div class="main"><div class="menu">
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
        
        <div class="main-right1">
        <h3>Quản lý tài khoảng Khách Hàng</h3>

        <!-- <div class="check">
            <input type="text" name="" id="">
            <button>Tìm Kiếm</button>
        </div> -->
        <div class="product">

            <div class="container mt-4">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Tên Tài Khoảng</th>
                      <th>Địa Chỉ Email</th>
                      <th>Số Điện thoại</th>
                      <th>Quản Lý</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
	$severname = "localhost";
	$username = "root";
	$password = "";
	$database = "shopquanao";
		
	$ketnoi = mysqli_connect($severname,$username,$password, $database);

?>
<?php
	$sql = "SELECT * FROM user ";
	$ketqua = $ketnoi->query($sql);
	if ($ketqua->num_rows > 0) {
	while($row = $ketqua->fetch_assoc()) {
		
		$ten = $row['fullname'];
		$phone = $row['phone'];
		$email = $row['email'];
		
                    echo"<tr>";
                      echo"<td>$ten</td>";
                      echo"<td>$email</td>";
                      echo"<td>$phone</td>";
                      echo"<td><button>Xóa</button><button type='margin: 5px;'>Sửa</button></td>";
                    echo"</tr>";		
		
	}}
	
	
	?>

                  </tbody>
                </table>
              </div>

        </div>

        </div>
    </div>
<footer class="foter">
<h4>shoppingchomoinha@gmail.com</h4>
</footer>
</body>
</html>