<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
require 'inc/_db.php';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions, so instead, we can get the results from the database.
$stmt = $con->prepare('SELECT '.$DATABASE_PREFIX.'password, '.$DATABASE_PREFIX.'email FROM accounts WHERE '.$DATABASE_PREFIX.'id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>


<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="./assets/dashboard.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>ADDDIT Dashboard</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="container">

			<h2 class="title">Profile Page</h2>

			<div class="content">
				
				<p>Your account details are below:</p>
				<ul class="ddd-user-data flex">
					<li class="ddd-user-item">Username:</li>
					<li class="ddd-user-value"><?=htmlspecialchars($_SESSION['name'], ENT_QUOTES)?></li>
				</ul>

				<ul class="ddd-user-data flex">
					<li class="ddd-user-item">Email:</li>
					<li class="ddd-user-value"><?=htmlspecialchars($email, ENT_QUOTES)?></li>
				</ul>

				<ul class="ddd-user-data flex">
					<li class="ddd-user-item">Password:</li>
					<li class="ddd-user-value">•••••••••</li>
					<li class="ddd-user-edit"><button onclick="changepwd()" id="changepwd" data-reveal="ddd-user-change-password">update password</button></li>
				</ul>

				<div class="ddd-user-data ddd-user-change-password hidden flex">
					<form action="update-pwd.php" method="post">
						<h4 class="heading">New Password (min 8 char):</h4>
						<ul class="flex">
							<li>
								<label>type your new password:</label><br>
								<input type="password" id="updpwd1" placeholder="type new password" />
								
							</li>
							<li>
								<label>re-type your new password:</label><br>
								<input type="password" id="updpwd2" placeholder="retype new password" />
								
							</li>
							<li class="ddd-user-edit"><span id="checkpwd"></span><button type="submit" id="setnewpwd" class="red" disabled>proceed</button></li>
						</ul>
						
						
								
					</form>
				</div>

			</div>
		</div>

		<script async defer src="./assets/dashboard.js"></script>
	</body>
</html>