<!DOCTYPE html>
<html>
<head>
	<title>FORM LOGIN</title>
</head>
<body>
	<form action="login.php" method="POST">
		<h2>LOGIN</h2>
		
		<?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

		<label>Username</label>
		<input type="text" name="uname" placeholder="User Name">

		<label>Password</label>
		<input type="text" name="password" placeholder="Password">

		<button type="submit">Login</button>
	</form>

</body>
</html>
