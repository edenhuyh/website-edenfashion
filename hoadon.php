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

    <div class='main'><div class='menu'>
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
        <h3>QUẢN LÝ THÔNG HÓA ĐƠN</h3>
        <h5>Hóa đơn số : 23415</h5>

        
        <div class='product'>

            <div class='container mt-4'>
                <table class='table table-striped'>
                  <thead>
                    <tr>
                      <th>Mã Hóa Đơn</th>
                      <th>Mã Đơn</th>
                      <th>Tình Trạng </th>
                      <th>Ngày Giao </th>
                      <th>Đơn Giá</th>
                    </tr>
                  </thead>
                  <tbody>
                    <div class='nasa'>
					<?php
					
					$sql = 'SELECT * FROM invoice  ';
						$ketqua = $ketnoi->query($sql);
						if ($ketqua->num_rows > 0) {
							while($row = $ketqua->fetch_assoc()) {
								
								$mhd = $row['id'];
								$md = $row['order_id'];
								$sta = $row['status'];
								$ngaygiao = $row['created_at'];
								$tt = $row['total'];
								
								
						}}
					
					   echo"<tr>";
                     echo"   <td>$mhd</td>";
                   echo"   <td>$md</td>";
                   echo"   <td>$sta</td>";
                   echo"   <td>$ngaygiao</td>";
                  echo"    <td>$tt vnd</td>";
                  echo"  </tr>";
					
					?>

                            

                </div>
                    
                  </tbody>
                </table>
                
              </div>

        </div>

        </div>
    </div>
<footer class='foter'>
<h4>shoppingchomoinha@gmail.com</h4>
</footer>
</body>
</html>