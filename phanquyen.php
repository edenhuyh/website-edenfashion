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
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="images-logo/user.jpg" alt="Logo" style="width:40px;" class="rounded-pill">
            Xin chào admin <input type="text">
            
          </a>
        <button>Đăng Xuất</button>
      </nav>
      
</header>

    <div class="main">
      
        <div class="menu">
        <h3>menu admin</h3>
      
        <div class="tql">
            <img src="images-logo/home.jpg" alt="">
            <a href="">Trang Chủ Báng Hàng</a>
        </div>
        <div class="tql">
            <img src="images-logo/tk.png" alt="">
            <a  href="admin.html">Thống Kê</a>
        </div>

        <div class="tql">
            <img src="images-logo/sp.png" alt="">
            <a href="products.html">Quản Lý Danh Sách Sản Phẩm</a>
        </div>
          
       
        <div class="tql">
            <img src="images-logo/qlnv.png" alt="">
            <a href="mana-admin.html">Quản Lý Nhân Viên</a>
        </div>
          
        <div class="tql">
            <img src="images-logo/qlsk.jpg" alt="">
            <a href="user.html">Quản Lý Khách Hàng</a>
        </div>

        <div class="tql">
           <img src="images-logo/hd.jpg" alt="">
        <a href="hoadon.html">Quản Lý Hóa Đơn</a>
        </div>

           
        

        </div>
        
        <div class="main-right">
        <h3>PHÂN QUYỀN </h3>

        
        <div class="product3">

            <div class="container mt-4">
                <table class="table table-striped">
                 <div class="vdb">
                    <h5>Tên nhân viên:</h5>
                    <select class="form-select">
                        <option></option>
                        <option>Đỗ Thanh Nam</option>
                        <option>Đỗ Thanh Trung</option>
                        <option>Cao Thanh Nam</option>
                        <option>Trần thanh Thúy</option>
                        <option>Lâm Thanh</option>
                        <option>Đỗ Thùy</option>
                      </select>
                 </div>
                 
                 

                <div class="vdb">
                   <h5>Quyền</h5>
                   <select class="form-select">
                    <option></option>
                    <option>Admin</option>
                    <option>Quản Trị Hệ Thống</option>
                    <option>Quản Lý Kho</option>
                    <option>Người Dùng</option>
                  </select>
                 </div>
                </table>
                <div class="adc1">
                    <button class="end">Xác Nhận</button>
                    <a href="mana-admin.html"><button class="end"> Quay lại</button></a>
                   
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