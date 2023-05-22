<!DOCTYPE html>
<html lang='zxx'>

<head>
    <meta charset='UTF-8'>
    <title>Giỏ Hàng</title>

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
                        <span>Giỏ Hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End-->

    <!-- Shopping Cart Section Begin-->
    <div class='shopping-cart spad'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <div class='cart-table'>
                        <table>
                            <thead>
                            <tr>
							
                                <th>Image</th>
                                <th class='p-name'>Mã Sản Phẩm</th>
                                <th class='p-name'>Tên Sản Phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th><i class='ti-close'></i></th>
                            </tr>
                            </thead>
                            <tbody>

							<?php
							
								if (isset($_POST['x'])){
									$key = array_search($_POST['idp'],$_SESSION['mang']);
									unset($_SESSION['mang']["$key"]);
									
								}		
								foreach ($_SESSION['mang'] as $i) {
									$id_pro = $_SESSION['gh']["$i"]["$i1"];
									$namep =  $_SESSION['gh']["$i"]["$i2"];
									$tien = $_SESSION['gh']["$i"]["$i3"];
									$img = $_SESSION['gh']["$i"]["$i4"];
									$sl = $_SESSION['gh']["$i"]["$i5"];
									echo"<form method = 'POST' , action = ''>";
									echo"<tr>";
									echo"<td class='cart-pic first-row'><img src='$img' alt=''></td>";
									echo"<td class='cart-title first-row'>";
									echo"<h5><input name ='idp' style='border:none'  value ='$id_pro'></h5>";
									echo"</td>";
									echo"<td class='cart-title first-row'>";
									echo"<h5>$namep</h5>";
									echo"</td>";
									echo"<td class='p-price first-row'>$tien VND</td>";
									echo"<td class='qua-col first-row'>";
									echo"<div class='quantity'>";
									echo"<div class='pro-qty'>";
									echo"<input name ='qty' type='text' value='$sl'>";
									echo"</div>";
									echo"</div>";
									echo"</td>";
									echo"<td class='close-td first-row'><button name = 'x' class='ti-close'></button></td>";
									echo"</tr>";
									
									echo"</form>";;
								}

																
							?>


                            </tbody>
                        </table>
                    </div>
                    <div class='row'>
                        <div class='col-lg-4'>
                            <div class='cart-buttons'>
                                <a href='trangchu.php' class='primary-btn continue-shop'>Continue Shopping</a>
                                <a href='shopping-cart.php' class='primary-btn up-cart'>Update Cart</a>
                            </div>
                            <div class='discount-coupon'>
                                <h6>Discount Codes</h6>
                                <form action='#' class='coupon-form'>
                                    <input type='text' placeholder='Enter your codes'>
                                    <button type='submit' class='site-btn coupon-btn'>Aplly</button>
                                </form>
                            </div>
                        </div>
                        <div class='col-lg-4 offset-lg-4'>
                            <div class='proceed-checkout'>

                                <a  href='check-out.php' class='proceed-btn'>PROCEED TO CHECKOUT</a>
		

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shopping Cart Section End-->

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