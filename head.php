<script src = 'v1/server.js'></script>
<?php
	session_start();
?>

<?php
	$severname = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'shopquanao';
		
	$ketnoi = mysqli_connect($severname,$username,$password, $database);

?>
<?php
	$sql = 'SELECT * FROM user';
	$ketqua = $ketnoi->query($sql);
	#if ($ketqua->num_rows > 0) {
	#while($row = $ketqua->fetch_assoc()) {
?>
<?php
$i1 = 1;
$i2 = 2;
$i3 = 3;
$i4 = 4;
$i5 = 5;
?>

<body>
    <!-- Start coding here -->

    <!-- Loader -->
    <div id = 'preloder'>
        <div class='loader'></div>
    </div>

    <!-- Header Section Begin-->
    <header class='header-section'>
        <div class='header-top'>
            <div class='container'>
                <div class='ht-left'>
                    <div class='mail-service'>
					<?php
					$email = '';
					$phone = '';
					if (isset($_SESSION['email'])){
						$email = $_SESSION['email'] ;
						$ten = $_SESSION['ten'] ;
						$phone = $_SESSION['phone'] ;
						$dchi = $_SESSION['dchi']  ;
						$role = $_SESSION['role'] ;

					}
                        echo"<i class='fa fa-envelope'></i>$email";
                    echo"</div>";
                    echo"<div class='phone-service'>";
                        echo"<i class='fa fa-user'></i>$ten";
                    echo"</div>";
					?>
                </div>
                <div class='ht-right'>
					<?php
					if (isset($_SESSION['email'])){
						$email = $_SESSION['email'] ;
						$ten = $_SESSION['ten'] ;
						$phone = $_SESSION['phone'] ;
						$dchi = $_SESSION['dchi']  ;
						$role = $_SESSION['role'] ;
						echo"<a href='login.php' class='login-panel'> <i class='fa fa-user'></i>Đăng xuất</a>";
					}else{
						echo"<a href='login.php' class='login-panel'> <i class='fa fa-user'></i>Đăng nhập</a>";
					}
					?>
                    <div class='top-social'>
                        <a href='#'><i class='ti-facebook'></i></a>
                        <a href='#'><i class='ti-twitter'></i></a>
                        <a href='#'><i class='ti-instagram'></i></a>
                        <a href='#'><i class='ti-pinterest'></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class='container'>
            <div class='inner-header'>
                <div class='row'>
                    <div class='col-lg-2 col-md-2'>
                        <div class='logo'>
                            <a href='trangchu.php'>
                                <img src='img/logo.png' height='25' alt=''>
                            </a>
                        </div>
                    </div>
                    <div class='col-lg-7 col-md-7'>
                        <div class='advanced-search'>
                            <button type='button' class='category-btn'>Tìm kiếm</button>
                            <div class='input-group'>
                                <input type='text' placeholder='Bạn đang tìm gì đó?'>
                                <button type='button'><i class='ti-search'></i></button>
                            </div>
                        </div>
                    </div>
                    <div class='col-lg-3 col-md-3 text-right'>
                        <ul class='nav-right'>
                            <li class='heart-icon'>
                                <a href='#'>
                                    <i class='icon_heart_alt'></i>
                                    <span>0</span>
                                </a>
                            </li>
                            <li class='cart-icon'>
                                <a href='#'>
                                    <i class='icon_bag_alt'></i>
									<?php
									$dem = 0;
									if(isset($_SESSION['mang'])){
									$dem = count($_SESSION['mang']);
									}
                                    echo"<span>$dem</span>";
									?>
                                </a>
                                <div class='cart-hover'>
                                    <div class='select-items'>
                                        <table>
                                            <tbody>
								<?php
								foreach ($_SESSION['mang'] as $i) {
									$id_pro = $_SESSION['gh']["$i"]["$i1"];
									$namep =  $_SESSION['gh']["$i"]["$i2"];
									$tien = $_SESSION['gh']["$i"]["$i3"];
									$img = $_SESSION['gh']["$i"]["$i4"];
									$sl = $_SESSION['gh']["$i"]["$i5"];
                                    echo"<tr>";
                                    echo"<td class='si-pic'><img src='$img'></td>";
                                    echo"<td class='si-text'>";
                                    echo"<div class='product-selected'>";
                                    echo"<p>$tien VNĐ x $sl</p>";
                                    echo"<h6>$namep</h6>";
                                    echo"</div>";
                                    echo"</td>";
                                    echo"<td class='si-close'>";
                                    echo"<i class='ti-close'></i>";
                                    echo"</td>";
                                    echo"</tr>";
									
								}
								?>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class='select-total'>
                                        
                                    </div>
                                    <div class='select-button'>
                                        <a href='shopping-cart.php' class='primary-btn view-card'>XEM GIỎ HÀNG</a>
                                        <a href='check-out.php' class='primary-btn checkout-btn'>CHECKOUT</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class='nav-item'>
            <div class='container'>
                <div class='nav-depart'>
                    <div class='depart-btn'>
                        <i class='ti-menu'></i>
                        <span>Danh mục</span>
                        <ul class='depart-hover'>
                            <li class='active'><a href='#'>Đồ Nữ</a> </li>
                            <li><a href='#'>Đồ Nam</a> </li>
                            <li><a href='#'>Đồ Trẻ Em</a> </li>
                            <li><a href='#'>Phụ Kiện</a> </li>
                        </ul>
                    </div>
                </div>
                <nav class='nav-menu mobile-menu'>
                    <ul>
                        <li ><a href='trangchu.php'>Trang Chủ</a></li>
                        <li><a href='shop.php'>Shop</a></li>
                        <li><a href='about-us.php'>Giới Thiệu</a>
                            <ul class='dropdown'>
                                <li><a href=''>Áo Thun</a></li>
                                <li><a href=''>Áo Khoác</a></li>
                                <li><a href=''>Quần Dài</a></li>
                                <li><a href=''>Quần Ngắn</a></li>
                                <li><a href=''>Balo</a></li>
                                <li><a href=''>Túi/Ví</a></li>
                            </ul>
                        </li>
                        <li><a href='blog.php'>Blog</a></li>
                        <li><a href='contact.php'>Liên Hệ</a></li>
						<?php
						
							if($_SESSION['role'] == 1){
								echo"<li><a href='admin.php'>Admin</a>";
							}
						
						?>

                    </ul>
                </nav>
                <div id='mobile-menu-wrap'></div>
            </div>
        </div>
    </header>