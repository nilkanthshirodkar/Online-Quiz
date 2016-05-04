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
  
<h1> X is a normally normally distributed variable with mean u = 30 and standard deviation o = 4. Find 
</br>
</br>
a) P(x < 40) 

b) P(x > 21) 

c) P(30 < x < 35)</h1>

</table>';


?>
</body>
</html>
