<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("database.php");
echo "<h2 class=head1> Level 1 </h2>";

echo '<table width="28%"  border="0" align="center">
  
<h1> 3 bags contain colored balls. Bag 1 contains 3 Red, 4 White and 1 Blue ball.
Bag 2 contains 1 Red, 2 White and 3 Blue ball.
Bag 3 contains 4 Red, 3 White and 2 Blue ball.
One bag is chosen at random and a ball is withdrawn.
</br>(a)What is the probability that a white ball is drawn?
</br>(b)Suppose a red ball is drawn. What is the probability that it came from urn 2?</h1>

</table>';


?>
</body>
</html>
