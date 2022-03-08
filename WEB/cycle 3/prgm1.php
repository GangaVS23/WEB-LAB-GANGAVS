<?php
$r="";
if(isset($_POST['b1']))
{
$n=$_POST['n'];
if($n%2==0)
$r="even";
else
$r="odd";
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Odd or even</title>
</head>
<body>
	<h2>Odd or Even</h2>
<form action="" method="post">
Enter the number:
<input type="text" name="n" required>
Result:
<input type="text" value="<?php echo $r ?>">
<input type="submit" name="b1" value="View Result">
</form>



</body>
</html>