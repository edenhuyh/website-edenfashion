<!DOCTYPE html>
<html lang='zxx'>

<head>
    <meta charset='UTF-8'>
    <title>Chi tiết sản phẩm</title>

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
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End-->


    <!-- Products Section End-->
    <section class='product-shop spad page-details'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-3'>
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
                </div>
                <div class='col-lg-9'>
                    <div class='row'>
                        <div class='col-lg-6'>
                            <div class='product-pic-zoom'>
							<form method ='POST' action = '' >
							<?php
								$id = 0;
								$id = $_GET['id'];

								$sql = "SELECT * FROM product WHERE id = $id " ;
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
								}
								}
									
                                echo"<img class='product-big-img' src='$img' alt=''>";
							?>	
                                <div class='zoom-icon'>
                                    <i class='fa fa-search-plus'></i>
                                </div>
                            </div>


                        </div>
                        <div class='col-lg-6'>
                            <div class='product-details'>
                                <div class='pd-title'>
                                    <span>orange</span>
									
                                    <?php  echo"<h3>$tit</h3>" ?>
                                    <a href='#' class='heart-icon'><i class='icon_heart_alt'></i></a>
                                </div>
                                <div class='pd-desc'>
                                    <?php 
									echo"<p>$des</p>"; 
									
                                    echo"<h4>$price VND <span></span></h4>";
									?>
                                </div>
                                <div class='pd-color'>

                                </div>
                                <div class='pd-size-choose'>
                                    <div class='sc-item'>
                                        <input type='radio' id='sm-size'>
                                        <label for='sm-size'>s</label>
                                    </div>
                                    <div class='sc-item'>
                                        <input type='radio' id='md-size'>
                                        <label for='md-size'>m</label>
                                    </div>
                                    <div class='sc-item'>
                                        <input type='radio' id='lg-size'>
                                        <label for='lg-size'>L</label>
                                    </div>
                                    <div class='sc-item'>
                                        <input type='radio' id='xl-size'>
                                        <label for='xl-size'>XL</label>
                                    </div>
                                </div>
                                <div class='quantity'>
                                    <div class='pro-qty'>
                                        <input name = 'sl' type='text' value='1'>
                                    </div>
									<?php
									$tgh = "ADD TO CART";
									$tg = "ADD TO CART";
									
									$i1 = 1;
									$i2 = 2;
									$i3 = 3;
									$i4 = 4;
									$i5 = 5;
									if (isset($_POST['gh'])){
										$ii = $_GET['id'];
										if(isset($_SESSION['gh']["$ii"]["$i1"])){
											$_SESSION['gh']["$ii"]["$i5"] += $_POST['sl'];
										}else{
										$_SESSION['gh']["$ii"]["$i1"] = $_GET['id'];
										$_SESSION['gh']["$ii"]["$i2"] = $tit;
										$_SESSION['gh']["$ii"]["$i3"] = $price;
										$_SESSION['gh']["$ii"]["$i4"] = $img;
										$_SESSION['gh']["$ii"]["$i5"] = $_POST['sl'];
										$t1 = $_SESSION['gh']["$ii"]["$i1"] ;
										$t2 = $_SESSION['gh']["$ii"]["$i2"] ;
										$_SESSION['mang'][] = $_GET['id'];
										$tgh = "successfully";
										}
										
									}
									if($tgh == $tg){
									echo"<button name = 'gh' class='primary-btn pd-cart'>$tgh</button>";
									}else{
									echo"<button disabled name = 'gh' class='primary-btn pd-cart'>$tgh</button>";
									}
									?>	

									</form>

								




								
                                </div>
                                <ul class='pd-tags'>
                                    <li><span>CATEGORIES</span><?php echo": $namef</li>"; ?>
                                    <li><span>TAGS</span>:<?php echo"$namec</li>"; ?>
                                </ul>
                                <div class='pd-share'>
                                    <span>SHARE NOW:</span>
                                    <div class='pd-social'>
                                        <a href='#'><i class='ti-facebook'></i></a>
                                        <a href='#'><i class='ti-twitter'></i></a>
                                        <a href='#'><i class='ti-instagram'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products Section End-->

    <!-- Related Products Section Begin-->
    <div class='related-products'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <div class='section-title'>
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-lg-3 col-sm-6'>
                    <div class='product-item'>
                        <div class='pi-pic'>
                            <img src='img/products/product-1.jpg' alt=''>
                            <div class='sale pp-sale'>Sale</div>
                            <div class='icon'>
                                <i class='icon_heart_alt'></i>
                            </div>
                            <ul>
                                <li class='w-icon active'><a href='#'><i class='icon_bag_alt'></i></a></li>
                                <li class='quick-view'><a href='product.php'>+ Quick View</a></li>
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
                <div class='col-lg-3 col-sm-6'>
                    <div class='product-item'>
                        <div class='pi-pic'>
                            <img src='img/products/product-8.jpg' alt=''>
                            <div class='sale pp-sale'>Sale</div>
                            <div class='icon'>
                                <i class='icon_heart_alt'></i>
                            </div>
                            <ul>
                                <li class='w-icon active'><a href='#'><i class='icon_bag_alt'></i></a></li>
                                <li class='quick-view'><a href='product.php'>+ Quick View</a></li>
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
                <div class='col-lg-3 col-sm-6'>
                    <div class='product-item'>
                        <div class='pi-pic'>
                            <img src='img/products/product-7.jpg' alt=''>
                            <div class='sale pp-sale'>Sale</div>
                            <div class='icon'>
                                <i class='icon_heart_alt'></i>
                            </div>
                            <ul>
                                <li class='w-icon active'><a href='#'><i class='icon_bag_alt'></i></a></li>
                                <li class='quick-view'><a href='product.php'>+ Quick View</a></li>
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
                <div class='col-lg-3 col-sm-6'>
                    <div class='product-item'>
                        <div class='pi-pic'>
                            <img src='img/products/product-5.jpg' alt=''>
                            <div class='sale pp-sale'>Sale</div>
                            <div class='icon'>
                                <i class='icon_heart_alt'></i>
                            </div>
                            <ul>
                                <li class='w-icon active'><a href='#'><i class='icon_bag_alt'></i></a></li>
                                <li class='quick-view'><a href='product.php'>+ Quick View</a></li>
                                <li class='w-icon'><a href=''><i class='fa fa-random'></i></a></li>
                            </ul>
                        </div>
                        <div class='pi-text'>
                            <div class='catagory-name'>Phụ Kiện</div>
                            <a href='#'>
                                <h5>Nón Trendy</h5>
                            </a>
                            <div class='product-price'>
                                150.000VNĐ
                                <span>900.000VNĐ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related Products Section End-->

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