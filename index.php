<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
</head>
<body>
<h1>Login</h1>
<form name="form" action="/password/file.php" method="post">
  <p>Enter the password</p>
  <input type="text" name="password" autofocus required>
  <input type="submit">
  <?PHP
  if (isset($_GET['status'])) {
    echo "<p style='color:red;'>The password is incorrect.</p>";
  }
  ?>
</form>
</body>
</html>
