<!DOCTYPE html>
<html lang='zxx'>

<head>
    <meta charset='UTF-8'>
    <title>CheckOut</title>

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap' rel='stylesheet'>

    <!-- Css Styles -->
    <link rel='stylesheet' href='css/bootstrap.min.css' type='text/css'>
    <link rel='stylesheet' href='css/font-awesome.min.css' type='text/css'>
    <link rel='stylesheet' href='css/themify-icons.css' type='text/css'>
    <link rel='stylesheet' href='css/elegant-icons.css' type='text/css'>
    <link rel='stylesheet' href='css/owl.carousel.min.css' type='text/css'>
    <link rel='stylesheet' href='css/nice-select.css' type='text/css'>
    <link rel='stylesheet' href='css/jquery-ui.min.css' type='text/css'>
    <link rel='stylesheet' href='css/slicknav.min.css' type='text/css'>
    <link rel='stylesheet' href='css/style.css' type='text/css'>
</head>

<body>
    <!-- Start coding here -->
    <!-- Loader -->
<?php include 'head.php'; ?>
    <!-- Header Section End-->

    <!-- Body Section Begin-->

    <!-- Breadcrumb Section Begin-->
    <div class='breadcrumb-section'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <div class='breadcrumb-text'>
                        <a href='trangchu.php'><i class='fa fa-home'></i>Home</a>
                        <a href='shop.php'><i class='fa fa-home'></i>Shop</a>
                        <span>CheckOut</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End-->

    <!-- Checkout Section Begin-->
    <div class='checkout-section spad'>
        <div class='container'>
            <form method ='POST' action='' class='checkout-form'>
                <div class='row'>
                    <div class='col-lg-6'>
                        <div class='checkout-content'>
                            <a href='login.php' class='content-btn'>Click đăng nhập trước khi thanh toán nhé!</a>
                        </div>
                        <h4>Chi Tiết Hóa Đơn</h4>
						
                        <div class='row'>
                            <div class='col-lg-12'>
							<?php
                                echo"<label for='ful'>Họ tên<span>*</span></label>";
                                echo"<input name ='name' type='text' id='ful' value ='$ten'>";
                            echo"</div>";
                            echo"<div class='col-lg-12'>";
                                echo"<label for='mail'>Email<span>*</span></label>";
                                echo"<input name = 'email' type='text' id='mail' value = '$email'>";
                            echo"</div>";
                            echo"<div class='col-lg-12'>";
                                echo"<label for='phone'>Số điện thoại<span>*</span></label>";
                                echo"<input name = 'phone' type='text' id='phone' value = '$phone'>";
                            echo"</div>";
                            echo"<div class='col-lg-12'>";
                                echo"<label for='address'>Địa chỉ<span>*</span></label>";
                                echo"<input name = 'dchi' type='text' id='address' value = '$dchi'>";
                            echo"</div>";
							?>
                            <div class='col-lg-12'>
                                <div class='create-item'>
                                    <label for='acc-create'>
                                        Tôi cam kết thông tin đã nhập chính xác!
                                        <input type='checkbox' id='acc-create'>
                                        <span class='checkmark'></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-lg-6'>
                        <div class='checkout-content'>
                            <input type='text' placeholder='Nhập Mã Khuyến Mãi (Nếu Có)'>
                        </div>
                        <div class='place-order'>
                            <h4>Đơn Hàng</h4>
                            <div class='order-total'>
                                <ul class='order-table'>
                                    <li>Product <span>Tổng Tiền</span></li>
									<?php
									$tongtien = 0;
									foreach ($_SESSION['mang'] as $i) {
										$id_pro = $_SESSION['gh']["$i"]["$i1"];
										$namep =  $_SESSION['gh']["$i"]["$i2"];
										$tien = $_SESSION['gh']["$i"]["$i3"];
										$img = $_SESSION['gh']["$i"]["$i4"];
										$sl = $_SESSION['gh']["$i"]["$i5"];
										$tien = $tien * $sl;
										echo"<li class='fw-normal'>$namep x $sl <span>$tien VNĐ</span></li>";
										echo"<input name = 'tenp' value ='$namep' hidden>";
										
										$tongtien += $tien;
										echo"<input name = 'tt' value = '$tongtien' hidden";
									}
									$tongtien += 30000 ;
									?>
									
									
                                    <li class='fw-normal'>Phí vận chuyển: <span>30.000VNĐ</span> </li>
                                    <?php echo"<li class='total-price'>Tổng Tiền: <span>$tongtien VNĐ</span></li>"; ?>
                                </ul>
                                <div class='payment-check'>
                                    <div class='pc-item'>
                                        <label for='pc-check'>
                                            Thanh toán khi nhận hàng (COD)
                                            <input type='checkbox' id='pc-check'>
                                            <span class='checkmark'></span>
                                        </label>
                                    </div>
                                </div>
                                <div class='order-btn'>
                                    <button name = 'dathang' type='submit' class='site-btn place-btn'>Đặt Hàng</button>
									<?php
										
										if (isset($_POST['dathang'])){
											
											$ten = $_SESSION['ten'];
											$id = $_SESSION['id'];
											$email = $_SESSION['email'];
											$phone = $_SESSION['phone'];
											$dchi = $_SESSION['dchi'];
											$thoigian = date("Y-m-d H:i:s");
											$deli = date("Y-m-d H:i:s");
											$sta = "Chờ Xét Duyệt";
											$VAT = 0.1;
											$tt = $tongtien * $VAT;
											$idd = '';
											$promo = 0;
											$fee = 30;
											$sql = "INSERT INTO order(id,user_id,promo_id,address,phone,order_date,delivery_date,status,feeship,total,VAT,created_at,updated_at,deteled) 
											VALUE('', '$id', '$promo', '$dchi', '$phone', '$thoigian', '$deli', '$sta', '$fee', '$tt', '$VAT', '', '', '')";
											
											echo"$idd";
											echo"$id";
											echo"$promo";
											echo"$dchi";
											echo"$phone";
											echo"$thoigian";
											echo"$deli";
											echo"$sta";
											echo"$fee";
											echo"$tt";
											echo"$VAT";
											$ketnoi->query($sql) ;
											echo"oke";
											
											
										}
									?>
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Checkout Section End-->

    <!-- Body Section End-->

    <!-- Footer Section Begin-->
    <footer class='footer-section'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-3 col-md-3'>
                    <div class='footer-left'>
                        <div class='footer-logo'>
                            <a href='trangchu.php'>
                                <img src='img/footer-logo.png' height='35' alt=''>
                            </a>
                        </div>
                        <ul>
                            <li>19, Nguyen Huu Tho, Q7, TP HCM</li>
                            <li>Phone: +84 777970194</li>
                            <li>Email: huyhcongchanh@gmail.com</li>
                        </ul>
                        <div class='footer-social'>
                            <a href='#'><i class='fa fa-facebook'></i></a>
                            <a href='#'><i class='fa fa-twitter'></i></a>
                            <a href='#'><i class='fa fa-instagram'></i></a>
                            <a href='#'><i class='fa fa-pinterest'></i></a>
                        </div>
                    </div>
                </div>
                <div class='col-lg-2 offset-lg-1 col-md-2'>
                    <div class='footer-widget'>
                        <h5>Information</h5>
                        <ul>
                            <li><a href='#'>About us</a></li>
                            <li><a href='product.php'>Product</a></li>
                            <li><a href='contact.php'>Contact</a></li>
                            <li><a href='#'>Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class='col-lg-2 col-md-2'>
                    <div class='footer-widget'>
                        <h5>My Account</h5>
                        <ul>
                            <li><a href='shop.php'>Shop</a></li>
                            <li><a href='shopping-cart.php'>Shopping Cart</a></li>
                            <li><a href='check-out.php'>Checkout</a></li>
                            <li><a href='delivery.php'>Delivery</a></li>
                        </ul>
                    </div>
                </div>
                <div class='col-lg-4 col-md-4'>
                    <div class='newslatter-item'>
                        <h5>Update for new discount</h5>
                        <p>Get E-mail updates about latest shop and special offers</p>
                        <form action='#' class='subscribe-form'>
                            <input type='text' placeholder='Enter your mail'>
                            <button type='button'>Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End-->

    <!-- Js Plugins -->
    <script src='js/jquery-3.3.1.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src='js/jquery-ui.min.js'></script>
    <script src='js/jquery.countdown.min.js'></script>
    <script src='js/jquery.nice-select.min.js'></script>
    <script src='js/jquery.zoom.min.js'></script>
    <script src='js/jquery.dd.min.js'></script>
    <script src='js/jquery.slicknav.js'></script>
    <script src='js/owl.carousel.min.js'></script>
    <script src='js/main.js'></script>
</body>

</html>