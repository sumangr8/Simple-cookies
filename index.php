<?php
if(isset($_COOKIE["suman"]))
{
	$name="suman";
	$content="Neha"+1;
	$expiry=time()+(60*60);
	setcookie($name,$content,$expiry);
}
else
{
	$name="suman";
	$content="Neha";
	$expiry=time()+(60*60);
	setcookie($name,$content,$expiry);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  echo $_COOKIE["suman"]; ?>
</body>
</html>
