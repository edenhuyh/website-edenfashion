<!DOCTYPE html>
<html lang='zxx'>

<head>
    <meta charset='UTF-8'>
    <title>Shop</title>

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
                        <a href='index.html'><i class='fa fa-home'></i>Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End-->

    <!-- Product Section Begin-->
    <section class='product-shop spad'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 product-sidebar-filter'>
                    <div class='filter-widget'>
                        <h4 class='fw-title'>Phân Loại</h4>
                        <ul class='filter-catagories'>
                            <li><a href='#'>Đồ Nữ</a></li>
                            <li><a href='#'>Đồ Nam</a></li>
                            <li><a href='#'>Đồ Trẻ Em</a></li>
                            <li><a href='#'>Phụ Kiện</a></li>
                            <li><a href='#'>New Arrivals</a></li>
                            <li><a href='#'>Collection</a></li>
                        </ul>
                    </div>
                    <div class='filter-widget'>
                        <h4 class='fw-title'>Kiểu Dáng</h4>
                        <div class='fw-design-check'>
                            <div class='bc-item'>
                                <label for='ao-thun'>
                                    Áo Thun
                                    <input type='checkbox' id='ao-thun'>
                                    <span class='checkmark'></span>
                                </label>
                            </div>
                            <div class='bc-item'>
                                <label for='ao-khoac'>
                                    Áo Khoác
                                    <input type='checkbox' id='ao-khoac'>
                                    <span class='checkmark'></span>
                                </label>
                            </div>
                            <div class='bc-item'>
                                <label for='quan-dai'>
                                    Quần Dài
                                    <input type='checkbox' id='quan-dai'>
                                    <span class='checkmark'></span>
                                </label>
                            </div>
                            <div class='bc-item'>
                                <label for='quan-ngan'>
                                    Quần Ngắn
                                    <input type='checkbox' id='quan-ngan'>
                                    <span class='checkmark'></span>
                                </label>
                            </div>
                            <div class='bc-item'>
                                <label for='balo'>
                                    Balo
                                    <input type='checkbox' id='balo'>
                                    <span class='checkmark'></span>
                                </label>
                            </div>
                            <div class='bc-item'>
                                <label for='tui-vi'>
                                    Túi/Ví
                                    <input type='checkbox' id='tui-vi'>
                                    <span class='checkmark'></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- <div class='filter-widget'>
                        <h4 class='fw-title'>Giá</h4>
                        <div class='filter-range-wrap'>
                            <div class='range-slider'>
                                <div class='price-input'>
                                    <input type='text' id='minamount'>
                                    <input type='text' id='maxamount'>
                                </div>
                            </div>
                            <div class='price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content'
                                 data-min='100000' data-max='10000000'>
                                <div class='ui-slider-range ui-corner-all ui-widget-header'></div>
                                <span tabindex='0' class='ui-slider-handle ui-corner-all ui-state-default'></span>
                                <span tabindex='0' class='ui-slider-handle ui-corner-all ui-state-default'></span>
                            </div>
                        </div>
                        <a href='#' class='filter-btn'>Bộ Lọc</a>
                        </div> -->
                </div>
                <div class='col-lg-9 order-1 order-lg-2'>
                    <div class='product-show-option'>
                        <div class='row'>
                            <div class='col-lg-7 col-md-7'>
                                <div class='select-option'>
                                    <select class='sorting'>
                                        <option value=''>Phân loại mặc định</option>
                                    </select>
                                    <select class='p-show'>
                                        <option value=''>Hiện:</option>
                                    </select>
                                </div>
                            </div>
                            <div class='col-lg-5 col-md-5 text-right'>
                                <p>Hiện: 01 - 06 của 25 sản phẩm</p>
                            </div>
                        </div>
                    </div>
                    <div class='product-list'>
                        <div class='row'>
							
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
								
								echo"<div class='col-lg-4 col-sm-6'>";
                                echo"<div class='product-item'>";
                                    echo"<div class='pi-pic'>";
                                        echo"<img src='$img' alt=''>";
                                        echo"<div class='sale pp-sale'>Sale</div>";
                                        echo"<div class='icon'>";
                                            echo"<i class='icon_heart_alt'></i>";
                                        echo"</div>";
                                        echo"<ul>";
                                            echo"<li class='w-icon active'><a href='#'><i class='icon_bag_alt'></i></a></li>";
                                            echo"<li class='quick-view'><a href='product.php?id=$pro_id'>+ Quick View</a></li>";
                                            echo"<li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>";
                                        echo"</ul>";
                                    echo"</div>";
                                    echo"<div class='pi-text'>";
                                        echo"<div class='catagory-name'>$namef</div>";
                                        echo"<a href='#'>";
                                            echo"<h5>$tit</h5>";
                                        echo"</a>";
                                        echo"<div class='product-price'>";
                                            echo"$price VND";
                                        echo"</div>";
                                    echo"</div>";
                                echo"</div>";
                            echo"</div>";

						}}
							?>
							
							 <div class='col-lg-4 col-sm-6'>
                                <div class='product-item'>
                                    <div class='pi-pic'>
                                        <img src='img/products/product-2.jpg' alt=''>
                                        <div class='sale pp-sale'>Sale</div>
                                        <div class='icon'>
                                            <i class='icon_heart_alt'></i>
                                        </div>
                                        <ul>
                                            <li class='w-icon active'><a href='#'><i class='icon_bag_alt'></i></a></li>
                                            <li class='quick-view'><a href='product.html'>+ Quick View</a></li>
                                            <li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class='pi-text'>
                                        <div class='catagory-name'>Áo Khoác</div>
                                        <a href='#'>
                                            <h5>Áo Khoác Len Tay Dài</h5>
                                        </a>
                                        <div class='product-price'>
                                            900.000VNĐ
                                            <span>1.800.000VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-lg-4 col-sm-6'>
                                <div class='product-item'>
                                    <div class='pi-pic'>
                                        <img src='img/products/product-3.jpg' alt=''>
                                        <div class='sale pp-sale'>Sale</div>
                                        <div class='icon'>
                                            <i class='icon_heart_alt'></i>
                                        </div>
                                        <ul>
                                            <li class='w-icon active'><a href='#'><i class='icon_bag_alt'></i></a></li>
                                            <li class='quick-view'><a href='product.html'>+ Quick View</a></li>
                                            <li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class='pi-text'>
                                        <div class='catagory-name'>Áo Khoác</div>
                                        <a href='#'>
                                            <h5>Áo Khoác Màu Xanh</h5>
                                        </a>
                                        <div class='product-price'>
                                            800.000VNĐ
                                            <span>2.700.000VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-lg-4 col-sm-6'>
                                <div class='product-item'>
                                    <div class='pi-pic'>
                                        <img src='img/products/product-4.jpg' alt=''>
                                        <div class='sale pp-sale'>Sale</div>
                                        <div class='icon'>
                                            <i class='icon_heart_alt'></i>
                                        </div>
                                        <ul>
                                            <li class='w-icon active'><a href='#'><i class='icon_bag_alt'></i></a></li>
                                            <li class='quick-view'><a href='product.html'>+ Quick View</a></li>
                                            <li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class='pi-text'>
                                        <div class='catagory-name'>Phụ Kiện</div>
                                        <a href='#'>
                                            <h5>Khăn Choàng Mùa Đông</h5>
                                        </a>
                                        <div class='product-price'>
                                            400.000VNĐ
                                            <span>800.000VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-lg-4 col-sm-6'>
                                <div class='product-item'>
                                    <div class='pi-pic'>
                                        <img src='img/products/product-6.jpg' alt=''>
                                        <div class='sale pp-sale'>Sale</div>
                                        <div class='icon'>
                                            <i class='icon_heart_alt'></i>
                                        </div>
                                        <ul>
                                            <li class='w-icon active'><a href='#'><i class='icon_bag_alt'></i></a></li>
                                            <li class='quick-view'><a href='product.html'>+ Quick View</a></li>
                                            <li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class='pi-text'>
                                        <div class='catagory-name'>Áo Thun</div>
                                        <a href='#'>
                                            <h5>Áo Sweater Len Tay Dài</h5>
                                        </a>
                                        <div class='product-price'>
                                            1.200.000VNĐ
                                            <span>1.800.000VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-lg-4 col-sm-6'>
                                <div class='product-item'>
                                    <div class='pi-pic'>
                                        <img src='img/products/product-7.jpg' alt=''>
                                        <div class='sale pp-sale'>Sale</div>
                                        <div class='icon'>
                                            <i class='icon_heart_alt'></i>
                                        </div>
                                        <ul>
                                            <li class='w-icon active'><a href='#'><i class='icon_bag_alt'></i></a></li>
                                            <li class='quick-view'><a href='product.html'>+ Quick View</a></li>
                                            <li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class='pi-text'>
                                        <div class='catagory-name'>Balo</div>
                                        <a href='#'>
                                            <h5>Balo Vàng</h5>
                                        </a>
                                        <div class='product-price'>
                                            1.100.000VNĐ
                                            <span>2.000.000VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-lg-4 col-sm-6'>
                                <div class='product-item'>
                                    <div class='pi-pic'>
                                        <img src='img/products/product-8.jpg' alt=''>
                                        <div class='sale pp-sale'>Sale</div>
                                        <div class='icon'>
                                            <i class='icon_heart_alt'></i>
                                        </div>
                                        <ul>
                                            <li class='w-icon active'><a href='#'><i class='icon_bag_alt'></i></a></li>
                                            <li class='quick-view'><a href='product.html'>+ Quick View</a></li>
                                            <li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class='pi-text'>
                                        <div class='catagory-name'>Áo Khoác</div>
                                        <a href='#'>
                                            <h5>Áo Khoác Dù</h5>
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
                    <div class='loading-more'>
                        <i class='icon_loading'></i>
                        <a href='#'>Tải thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End-->

    <!-- Body Section End-->

    <!-- Footer Section Begin-->
    <footer class='footer-section'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-3 col-md-3'>
                    <div class='footer-left'>
                        <div class='footer-logo'>
                            <a href='index.html'>
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
                            <li><a href='product.html'>Product</a></li>
                            <li><a href='contact.html'>Contact</a></li>
                            <li><a href='#'>Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class='col-lg-2 col-md-2'>
                    <div class='footer-widget'>
                        <h5>My Account</h5>
                        <ul>
                            <li><a href='shop.html'>Shop</a></li>
                            <li><a href='shopping-cart.html'>Shopping Cart</a></li>
                            <li><a href='check-out.html'>Checkout</a></li>
                            <li><a href='delivery.html'>Delivery</a></li>
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