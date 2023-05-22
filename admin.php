<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css2/style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    <title>nháp</title> -->
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
            <h3>Thống kê</h3>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Loại hàng hóa</th>
                    <th>Tổng số hàng hóa</th>
                    <th>Số hàng đã bán</th>
                    <th>Số hàng tồn kho</th>
                  </tr>
                </thead>
                <tbody>
<?php

						$sql = 'SELECT * FROM product  ';
						$ketqua = $ketnoi->query($sql);
						if ($ketqua->num_rows > 0) {
							while($row = $ketqua->fetch_assoc()) {
								$cate_id = $row['category_id'];
								$form_id = $row['form_id'];
								$tit = $row['title'];
								$pro_id = $row['id'];
								$des = $row['discription'];
								$tonghh = 0;
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
										$tonghh += $qty ;
										if ($ketquaaa->num_rows > 0) {
											while($rownn = $ketquaaa->fetch_assoc()) {
												
												$img = $rownn['path'];
												
												
												
										}}
										
										
										
										$sqlll = "SELECT * FROM order_detail WHERE pdetail_id = $pro_id";
										$tongdaban = 0;
										$ketquaaa = $ketnoi->query($sqlll);
										if ($ketquaaa->num_rows > 0) {
											while($rownn = $ketquaaa->fetch_assoc()) {
												
												$tongdaban += $rownn['qty'];
												
												
												
										}}
									
									
									
										
								}}
								
								$sf = "SELECT * FROM form Where id = $form_id";
								$kf =$ketnoi->query($sf);
								if ($kf->num_rows > 0) {
								while($row = $kf->fetch_assoc()) {
									$namef = $row['name'];
								}}
								
								
								$sc = "SELECT * FROM category Where id = $cate_id";
								$kc =$ketnoi->query($sc);
								if ($kc->num_rows > 0) {
								while($row = $kc->fetch_assoc()) {
									$namec = $row['name'];
								}}
							
											    echo"<tr>";
                    echo"<td>$tit</td>";
					
                    echo"<td>$tonghh</td>";
                    echo"<td>$tongdaban</td>";
					$tongcon = $tonghh - $tongdaban;
                    echo"<td>$tongcon</td>";
                  echo"</tr>";


						}}



?>

                </tbody>
              </table>
            
            
       



   
      
       
   

        </div>
    </div>
<footer class="foter">
<h4>shoppingchomoinha@gmail.com</h4>
</footer>
</body>
</html>