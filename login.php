<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css2/style.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <title>Login Page</title>
</head>

<body>
<?php
	session_start();
	session_destroy();
?>
<?php
	session_start();
	
?>
<?php
	$severname = "localhost";
	$username = "root";
	$password = "";
	$database = "shopquanao";
		
	$ketnoi = mysqli_connect($severname,$username,$password, $database);

?>
<?php
	$sql = "SELECT * FROM user";
	$ketqua = $ketnoi->query($sql);
	#if ($ketqua->num_rows > 0) {
	#while($row = $ketqua->fetch_assoc()) {
?>

    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <img src="./images-logo/logo-vl.jpg" alt="logo">
            </div>
            <div class="login-card-header">
                <h1>Sign In</h1>
                <div>Please login to use the platform</div>
            </div>
            <form method = 'POST' action = '' class="login-card-form">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">mail</span>
                    <input name='mail' type="text" placeholder="Enter Email" id="emailForm" 
                    autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input name='pass' type="password" placeholder="Enter Password" id="passwordForm"
                     required>
                </div>
                <div class="form-item-other">
                    <div class="checkbox">
                        <input type="checkbox" id="rememberMeCheckbox" checked>
                        <label for="rememberMeCheckbox">Remember me</label>
                    </div>
                    <a href="#">I forgot my password!</a>
                </div>
                <button name ="dn" type="submit">Sign In</button>
            </form>
            <div class="login-card-footer">
                Don't have an account? <a href="#">Create a free account.</a>
            </div>
        </div>
<?php
	$id_user = 0;
	$email = 0;
	$pass = 0;
	$ten = 0;
	$phone = 0;
	$dchi = 0;
	$role = 0;
	if (isset($_POST['dn'])){
	$email = $_POST['mail'];
	$pass = $_POST['pass'];
	if ($ketqua->num_rows > 0) {
		while($row = $ketqua->fetch_assoc()) {
				$id_u = $row['id'];
				$mal = $row['email'];
				$pas = $row['password'];
				$ten = $row['fullname'];
				$phone = $row['phone'];
				$dchi = $row['address'];
				$role = 0;
				$sqll = "SELECT * FROM employee";
				$ketquaa = $ketnoi->query($sqll);
				if ($ketquaa->num_rows > 0) {
					while($row = $ketquaa->fetch_assoc()) {
						if ($row['email'] == $mal){ 
						$role = $row['role_id'];
						}
					}
				}
				if ($email == $mal and $pass == $pas) {
					$_SESSION['id'] = $id_u;
					$_SESSION['email'] = $email;
					$_SESSION['ten'] = $ten;
					$_SESSION['phone'] = $phone ;
					$_SESSION['dchi'] = $dchi ;
					$_SESSION['role'] = $role;			
					header("location: trangchu.php?") ;
					}
				}
			}
		}
	
?>
    </div>

</body>

</html>