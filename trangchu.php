<!DOCTYPE html>
<html lang='zxx'>

<head>
    <meta charset='UTF-8'>
    <title>Eden Shop</title>

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

<?php include "head.php"; ?>
    <!-- Header Section End-->

    <!-- Body Section Begin-->

    <!-- Hero Section Begin -->
    <section class='hero-section'>
        <div class='hero-items owl-carousel'>
            <div class='single-hero-items set-bg' data-setbg='img/heroo-1.jpg'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-lg-5'>
                            <span>Bag, women's</span>
                            <h1>Black friday</h1>
                            <p>Đẳng cấp phụ nữ hiện đại</p>
                            <a href='#' class='primary-btn'>Shop Now</a>
                        </div>
                    </div>
                    <div class='off-card'>
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class='single-hero-items set-bg' data-setbg='img/heroo-2.jpg'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-lg-5'>
                            <span>Bag, men's</span>
                            <h1>Black friday</h1>
                            <p>Thời trang cho những quý ông thời thượng</p>
                            <a href='#' class='primary-btn'>Shop Now</a>
                        </div>
                    </div>
                    <div class='off-card'>
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class='single-hero-items set-bg' data-setbg='img/heroo-3.jpg'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-lg-5'>
                            <span>Bag, kids</span>
                            <h1>Black friday</h1>
                            <p>Trẻ em như búp trên cành, Chờ đợi gì nữa hãy vào mua ngay, Siêu sale cuối năm cho bé</p>
                            <a href='#' class='primary-btn'>Shop Now</a>
                        </div>
                    </div>
                    <div class='off-card'>
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Women Banner Section Begin-->
    <section class='women-banner spad'>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-lg-3'>
                    <div class='product-large set-bg' data-setbg='img/products/women-large.jpg'>
                        <h2> Women's</h2>
                        <a href='#'>Discover More</a>
                    </div>
                </div>
                <div class='col-lg-8 offset-lg-1'>
                    <div class='filter-control'>
                        <ul>
                            <li class='active'>Quần áo nữ</li>
                        </ul>
                    </div>
                    <div class='product-slider owl-carousel'>
						
					<?php
											
						$sql = "SELECT * FROM product Where category_id = 1 ";
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
								
								
								
								echo"<div class='product-item'> ";
								echo"<div class='pi-pic'>";
                                echo"<img src='$img' alt=''>";
                                echo"<div class='sale'>Sale</div>";
                                echo"<div class='icon'>";
                                echo"<i class='icon_heart_alt'></i>";
                               echo" </div>";
                               echo" <ul>";
                               echo" <li class='w-icon active'><a href='shopping-cart.php'><i class='icon_bag_alt'></i></a></li>";
                               echo" <li class='quick-view'><a href='product.php?id=$pro_id'>+ Xem Nhanh</a></li>";
                               echo" <li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>";
                               echo" </ul>";
								echo"</div>";
								echo"<div class='pi-text'>";
								
                               echo" <div class='catagory-name'>$namef</div>";
                               echo" <a href=''>";
                               echo" <h5>$tit</h5>";
                               echo" </a>";
                               echo" <div class='product-price'>";
                               echo" $price VND";
                               
								echo"</div>";
								echo"</div>";
								echo"</div>";
							}
						}
					
					?>
						
                        <div class='product-item'>
                            <div class='pi-pic'>
                                <img src='img/products/women-1.jpg' alt=''>
                                <div class='sale'>Sale</div>
                                <div class='icon'>
                                    <i class='icon_heart_alt'></i>
                                </div>
                                <ul>
                                    <li class='w-icon active'><a href='shopping-cart.php'><i class='icon_bag_alt'></i></a></li>
                                    <li class='quick-view'><a href='product.php'>+ Xem Nhanh</a></li>
                                    <li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>
                                </ul>
                            </div>
                            <div class='pi-text'>
                                <div class='catagory-name'>Áo Khoác</div>
                                <a href=''>
                                    <h5>Linen</h5>
                                </a>
                                <div class='product-price'>
                                    900.000VNĐ
                                    <span>1.800.000VNĐ</span>
                                </div>
                            </div>
                        </div>
						
                        <div class='product-item'>
                            <div class='pi-pic'>
                                <img src='img/products/women-2.jpg' alt=''>
                                <div class='sale'>Sale</div>
                                <div class='icon'>
                                    <i class='icon_heart_alt'></i>
                                </div>
                                <ul>
                                    <li class='w-icon active'><a href='shopping-cart.php'><i class='icon_bag_alt'></i></a></li>
                                    <li class='quick-view'><a href='product.php'>+ Xem Nhanh</a></li>
                                    <li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>
                                </ul>
                            </div>
                            <div class='pi-text'>
                                <div class='catagory-name'>Áo Kiểu</div>
                                <a href=''>
                                    <h5>Len</h5>
                                </a>
                                <div class='product-price'>
                                    900.000VNĐ
                                    <span>1.800.000VNĐ</span>
                                </div>
                            </div>
                        </div>
                        <div class='product-item'>
                            <div class='pi-pic'>
                                <img src='img/products/women-1.jpg' alt=''>
                                <div class='sale'>Sale</div>
                                <div class='icon'>
                                    <i class='icon_heart_alt'></i>
                                </div>
                                <ul>
                                    <li class='w-icon active'><a href='shopping-cart.php'><i class='icon_bag_alt'></i></a></li>
                                    <li class='quick-view'><a href='product.php'>+ Xem Nhanh</a></li>
                                    <li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>
                                </ul>
                            </div>
                            <div class='pi-text'>
                                <div class='catagory-name'>Áo Kiểu</div>
                                <a href=''>
                                    <h5>Lenn</h5>
                                </a>
                                <div class='product-price'>
                                    900.000VNĐ
                                    <span>1.800.000VNĐ</span>
                                </div>
                            </div>
                        </div>
                        <div class='product-item'>
                            <div class='pi-pic'>
                                <img src='img/products/women-3.jpg' alt=''>
                                <div class='sale'>Sale</div>
                                <div class='icon'>
                                    <i class='icon_heart_alt'></i>
                                </div>
                                <ul>
                                    <li class='w-icon active'><a href='shopping-cart.php'><i class='icon_bag_alt'></i></a></li>
                                    <li class='quick-view'><a href='product.php'>+ Xem Nhanh</a></li>
                                    <li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>
                                </ul>
                            </div>
                            <div class='pi-text'>
                                <div class='catagory-name'>Áo len</div>
                                <a href=''>
                                    <h5>Len</h5>
                                </a>
                                <div class='product-price'>
                                    900.000VNĐ
                                    <span>1.800.000VNĐ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End-->

    <!-- Men Banner Section End-->
    <section class='man-banner spad'>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-lg-8'>
                    <div class='filter-control'>
                        <ul>
                            <li class='active'>Quần áo nam</li>
                        </ul>
                    </div>
                    <div class='product-slider owl-carousel'>
					
					<?php
											
						$sql = "SELECT * FROM product Where category_id = 1 ";
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
								
								
								
								echo"<div class='product-item'> ";
								echo"<div class='pi-pic'>";
                                echo"<img src='$img' alt=''>";
                                echo"<div class='sale'>Sale</div>";
                                echo"<div class='icon'>";
                                echo"<i class='icon_heart_alt'></i>";
                               echo" </div>";
                               echo" <ul>";
                               echo" <li class='w-icon active'><a href='shopping-cart.php'><i class='icon_bag_alt'></i></a></li>";
                               echo" <li class='quick-view'><a href='product.php?id=$pro_id'>+ Xem Nhanh</a></li>";
                               echo" <li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>";
                               echo" </ul>";
								echo"</div>";
								echo"<div class='pi-text'>";
								
                               echo" <div class='catagory-name'>$namef</div>";
                               echo" <a href=''>";
                               echo" <h5>$tit</h5>";
                               echo" </a>";
                               echo" <div class='product-price'>";
                               echo" $price VND";
                               
								echo"</div>";
								echo"</div>";
								echo"</div>";
							}
						}
					
					?>
					
                        <div class='product-item'>
                            <div class='pi-pic'>
                                <img src='img/products/man-1.jpg' alt=''>
                                <div class='sale'>Sale</div>
                                <div class='icon'>
                                    <i class='icon_heart_alt'></i>
                                </div>
                                <ul>
                                    <li class='w-icon active'><a href='shopping-cart.php'><i class='icon_bag_alt'></i></a></li>
                                    <li class='quick-view'><a href='product.php'>+ Xem Nhanh</a></li>
                                    <li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>
                                </ul>
                            </div>
                            <div class='pi-text'>
                                <div class='catagory-name'>Balo</div>
                                <a href=''>
                                    <h5>Canvas</h5>
                                </a>
                                <div class='product-price'>
                                    1.000.000VNĐ
                                    <span>3.000.000</span>
                                </div>
                            </div>
                        </div>
                        <div class='product-item'>
                            <div class='pi-pic'>
                                <img src='img/products/man-2.jpg' alt=''>
                                <div class='sale'>Sale</div>
                                <div class='icon'>
                                    <i class='icon_heart_alt'></i>
                                </div>
                                <ul>
                                    <li class='w-icon active'><a href='shopping-cart.php'><i class='icon_bag_alt'></i></a></li>
                                    <li class='quick-view'><a href='product.php'>+ Xem Nhanh</a></li>
                                    <li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>
                                </ul>
                            </div>
                            <div class='pi-text'>
                                <div class='catagory-name'>Giày</div>
                                <a href=''>
                                    <h5>Len</h5>
                                </a>
                                <div class='product-price'>
                                    900.000VNĐ
                                    <span>2.900.000</span>
                                </div>
                            </div>
                        </div>
                        <div class='product-item'>
                            <div class='pi-pic'>
                                <img src='img/products/man-3.jpg' alt=''>
                                <div class='sale'>Sale</div>
                                <div class='icon'>
                                    <i class='icon_heart_alt'></i>
                                </div>
                                <ul>
                                    <li class='w-icon active'><a href='shopping-cart.php'><i class='icon_bag_alt'></i></a></li>
                                    <li class='quick-view'><a href='product.php'>+ Xem Nhanh</a></li>
                                    <li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>
                                </ul>
                            </div>
                            <div class='pi-text'>
                                <div class='catagory-name'>Áo Khoác</div>
                                <a href=''>
                                    <h5>Dù</h5>
                                </a>
                                <div class='product-price'>
                                    900.000VNĐ
                                    <span>1.800.000VNĐ</span>
                                </div>
                            </div>
                        </div>
                        <div class='product-item'>
                            <div class='pi-pic'>
                                <img src='img/products/man-4.jpg' alt=''>
                                <div class='sale'>Sale</div>
                                <div class='icon'>
                                    <i class='icon_heart_alt'></i>
                                </div>
                                <ul>
                                    <li class='w-icon active'><a href='shopping-cart.php'><i class='icon_bag_alt'></i></a></li>
                                    <li class='quick-view'><a href='product.php'>+ Xem Nhanh</a></li>
                                    <li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>
                                </ul>
                            </div>
                            <div class='pi-text'>
                                <div class='catagory-name'>Khoác</div>
                                <a href=''>
                                    <h5>Cotton</h5>
                                </a>
                                <div class='product-price'>
                                    900.000VNĐ
                                    <span>1.800.000VNĐ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-lg-3 offset-lg-1'>
                    <div class='product-large set-bg' data-setbg='img/products/man-large.jpg'>
                        <h2> Men</h2>
                        <a href='#'>Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Men Banner Section End-->

    <!-- Benefit Items Begin
    <div class='benefit-items'>
        <div class='row'>
            <div class='col-lg-4'>
                <div class='single-benefit'>
                    <div class='sb-icon'>
                        <img src='img/icon-1.png' alt=''>
                    </div>
                    <div class='sb-text'>
                        <h6>Free Shipping</h6>
                        <p>Cho mọi hóa đơn trên 1.000.000VNĐ</p>
                    </div>
                </div>
            </div>
            <div class='col-lg-4'>
                <div class='single-benefit'>
                    <div class='sb-icon'>
                        <img src='img/icon-2.png' alt=''>
                    </div>
                    <div class='sb-text'>
                        <h6>Delivery On Time</h6>
                        <p>Giao hàng trên toàn quốc</p>
                    </div>
                </div>
            </div>
            <div class='col-lg-4'>
                <div class='single-benefit'>
                    <div class='sb-icon'>
                        <img src='img/icon-3.png' alt=''>
                    </div>
                    <div class='sb-text'>
                        <h6>Secure Payment</h6>
                        <p>An tâm Ship COD</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
     Instagram Section End-->
    <!-- Benefit Items End-->

    <!-- Instagram Section Begin-->
    <div class='instagram-photo'>
        <div class='insta-item set-bg' data-setbg='img/insta-1.jpg'>
            <div class='inside-text'>
                <i class='ti-instagram'></i>
                <h5><a href='#'>EdenHuynh</a></h5>
            </div>
        </div>
        <div class='insta-item set-bg' data-setbg='img/insta-2.jpg'>
            <div class='inside-text'>
                <i class='ti-instagram'></i>
                <h5><a href='#'>EdenHuynh</a></h5>
            </div>
        </div>
        <div class='insta-item set-bg' data-setbg='img/insta-3.jpg'>
            <div class='inside-text'>
                <i class='ti-instagram'></i>
                <h5><a href='#'>EdenHuynh</a></h5>
            </div>
        </div>
        <div class='insta-item set-bg' data-setbg='img/insta-4.jpg'>
            <div class='inside-text'>
                <i class='ti-instagram'></i>
                <h5><a href='#'>EdenHuynh</a></h5>
            </div>
        </div>
        <div class='insta-item set-bg' data-setbg='img/insta-5.jpg'>
            <div class='inside-text'>
                <i class='ti-instagram'></i>
                <h5><a href='#'>EdenHuynh</a></h5>
            </div>
        </div>
        <div class='insta-item set-bg' data-setbg='img/insta-6.jpg'>
            <div class='inside-text'>
                <i class='ti-instagram'></i>
                <h5><a href='#'>EdenHuynh</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End-->

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