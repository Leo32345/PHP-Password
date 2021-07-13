<?PHP
if ($_POST['password'] != "1234"){
header('Location: https://phptests.leo32345.repl.co/password?status=wrong');
exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>File</title>
</head>
<body>
<?PHP 
if ($_POST['password'] = "1234"){
  echo "<h1>SECRECT STUFF HERE</h1>";
}
?>
</body>
</html>
