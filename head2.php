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
	<nav class='navbar navbar-expand-sm bg-dark navbar-dark'>
        <div class='container-fluid'>
          <a class='navbar-brand' href='#'>
            <img src='images-logo/user.jpg' alt='Logo' style='width:40px;' class='rounded-pill'>
			<?php
			session_start();
			$ten =$_SESSION['ten'];
            echo"Xin chào admin <input type='text'value ='$ten' disabled>";
			
			echo"<a href='login.php' class='login-panel'> <i class='fa fa-user'></i>Đăng xuất</a>";
            ?>
          </a>
        
      </nav>
	  <link rel="stylesheet" href="styley.css">