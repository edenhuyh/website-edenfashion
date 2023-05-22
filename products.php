<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel='stylesheet' href='css2/style1.css'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js'></script>
  
</head>
<body>
<header class='header'>
<?php include 'head2.php'; ?>
      
</header>

    <div class='main'>
        <div class='menu'>
            <h3>menu admin</h3>
          
            <div class='tql'>
                <img src='images-logo/home.jpg' alt=''>
                <a href='trangchu.php'>Trang Chủ Báng Hàng</a>
            </div>
            <div class='tql'>
                <img src='images-logo/tk.png' alt=''>
                <a  href='admin.php'>Thống Kê</a>
            </div>
    
            <div class='tql'>
                <img src='images-logo/sp.png' alt=''>
                <a href='products.php'>Quản Lý Danh Sách Sản Phẩm</a>
            </div>
              
           
            <div class='tql'>
                <img src='images-logo/qlnv.png' alt=''>
                <a href='mana-admin.php'>Quản Lý Nhân Viên</a>
            </div>
              
            <div class='tql'>
                <img src='images-logo/qlsk.jpg' alt=''>
                <a href='user.php'>Quản Lý Khách Hàng</a>
            </div>
    
            <div class='tql'>
               <img src='images-logo/hd.jpg' alt=''>
            <a href='hoadon.php'>Quản Lý Hóa Đơn</a>
            </div>
    
               
            
    
            </div>
        
        <div class='main-right'>
        <h3>QUẢN LÝ DANH SÁCH SẢN PHẨM</h3>

        <div class='check'>
            <input type='text' name='' id=''>
            <button>Tìm Kiếm</button>
        </div>
        <div class='product'>

            <div class='container mt-4'>
                <table class='table table-striped'>
                  <thead>
                    <tr>
                      <th>Sản Phẩm</th>
                      <th>Tên Sản Phẩm</th>
                      <th>Size</th>
					  <th>Màu</th>
					  <th>Giá</th>
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
	$sql = "SELECT * FROM product";
	$ketqua = $ketnoi->query($sql);
	if ($ketqua->num_rows > 0) {
	while($row = $ketqua->fetch_assoc()) {
								$cate_id = $row['category_id'];
								$form_id = $row['form_id'];
								$tit = $row['title'];
								$pro_id = $row['id'];
								$des = $row['discription'];
								$sqll = "SELECT * FROM product_detail WHERE product_id = $pro_id";
								$ketquaa = $ketnoi->query($sqll);
								if ($ketquaa->num_rows > 0) {
									while($rown = $ketquaa->fetch_assoc()) {
										$price = $rown['price'];
										$discout_id = $rown['discount_id'];
										$size_id = $rown['size_id'];
										$img_id = $rown['img_id'];
										$color_id = $rown['color_id'];
										$qty = $rown['qty'];
										$status = $rown['status'];
										
										
										
										$sqlll = "SELECT * FROM product_img WHERE id = $img_id";
										$ketquaaa = $ketnoi->query($sqlll);
										if ($ketquaaa->num_rows > 0) {
											while($rownn = $ketquaaa->fetch_assoc()) {
												
												$img = $rownn['path'];
												
												
												
										}}
										$sqlll = "SELECT * FROM product_color WHERE id = $color_id";
										$ketquaaa = $ketnoi->query($sqlll);
										if ($ketquaaa->num_rows > 0) {
											while($rownn = $ketquaaa->fetch_assoc()) {
												
												$mau = $rownn['color'];
												
												
												
										}}
										$sqlll = "SELECT * FROM product_size WHERE id = $size_id";
										$ketquaaa = $ketnoi->query($sqlll);
										if ($ketquaaa->num_rows > 0) {
											while($rownn = $ketquaaa->fetch_assoc()) {
												
												$size = $rownn['size'];
												
												
												
										}}
                    echo"<tr>";
                      echo"<td class='uff'><img src='$img' alt=''></td>";
                      echo"<td>$tit</td>";
					  echo"<td>$size</td>";
					  echo"<td>$mau</td>";
                     echo" <td>$price vnd</td>";
                      echo"<td><button>Xóa</button></td>";
                    echo"</tr>";	
		
	}}
	}}
	
?>

                  </tbody>
                </table>
                <div class='adc'>
                    <a href='themsp.php'><button class='end'>Thêm Sản phẩm</button></a>
                    <button class='end'> Cập Nhật</button>
                   
                </div>
              </div>

        </div>

        </div>
    </div>

</body>
</html>