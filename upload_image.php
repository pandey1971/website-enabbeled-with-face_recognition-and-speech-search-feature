

<!-- html code -->
<!DOCTYPE html>
<html lang="en">
<head>
	<title> php move</title>
	<style>
		body{
			background-color:chartreuse;
		}
	</style>
</head>
<body>

<?php if (isset($_GET['error'])): ?>
  <p><?php echo $_GET['error']; ?></p>
  <?php endif ?>
<center>
	<h1> WELCOME!! T^o FOOD MANIA</h1>
<form action="exam.php" method="post" enctype="multipart/form-data">
<b>Username</b> <input type="text" name="username">
<b>Password</b> <input type="text   name="password">
<label><b>Email</b></label>
<input type="email" name="email"></input>
<label><b>Phone_Number</b></label>
<input type="text"></input><br>
<pre>
    
  <label><b>Gender</b></label><input type="text"></input></pre><br>
<input type="file" accept=".jpg" name="my_image"><br><BR>
<input type="submit" name="submit" value="upload">

</form>
<img src="foodmania.png"style="margin-top:40px;">
<h2> We /\re Best In Your Area !!!!!</h2>
</center>	
</body>
</html>