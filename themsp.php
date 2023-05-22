<!DOCTYPE trangchu>
<trangchu lang='en'>
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
        
        <div class='main-right7' type='height: 900px;'>
        <h3>Thêm Sản Phẩm</h3>

        <form method = 'POST' action = '' enctype='multipart/form-data'>
        <div class='product6'>
            <div class='container'>
            <div>
                <h5>Tên Sản Phẩm:</h5>
                <input name = 'ten' type='text'>
            </div>

            <div>
                <h5>Đặc Điểm sản Phẩm:</h5>
                <input name = 'dd' type='text'>
            </div>
            <div >
                <h5>Ảnh Sản Phẩm:</h5>
                <div class='themimg'>
                    
                <input name = 'hinh' type='file'  >
                </div>
            </div>

            <div class='img-dowload-product'>
                <h5>Đơn Giá:</h5>
                <input name = 'tien' type='text'>
            </div>
            <div>
                <h5>Ghi Chú:</h5>
                <input name = 'gc' type='text'>
            </div>
            <div>
                <h5>Loại:</h5>
                <input name = 'loai' type='text'>
            </div>

            <div class='container mt-4'>
                
                <div class='adc'>
                    <a href=''><button name ='them' >Thêm Sản phẩm</button></a>
                    <a href='products.php'>  Trở về</button></a>
<?php
	$severname = "localhost";
	$username = "root";
	$password = "";
	$database = "shopquanao";
		
	$ketnoi = mysqli_connect($severname,$username,$password, $database);

?>					
					<?php
						if(isset($_POST['them'])){
							$ten = $_POST['ten'];
							$dd = $_POST['dd'];
							$hinh =  basename($_FILES["hinh"]["name"]);
							$tien = $_POST['tien'];
							$loai = $_POST['loai'];
							$des = $_POST['gc'];
							$thoigian = date("Y-m-d H:i:s");
							$id = '';
							$tiend = '150000' ;
							$target_dir = "img/";
							$target_file = $target_dir . $hinh;
							move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
							$sql = "INSERT INTO product (id, category_id, form_id,title,price,discount,size,img,description,created_at,updated_at,deleted) VALUES ('$id', '$loai', '$dd','$ten','$tien','$tiend','M','$hinh','$des','$thoigian','','')";
							$ketnoi->query($sql);
						}
					
					?>
                   
                </div>
              </div>

            </div>
            </div>

        </div>
    </div>
	</form>

<script src='imgproduct.js'></script>
</body>
</trangchu>