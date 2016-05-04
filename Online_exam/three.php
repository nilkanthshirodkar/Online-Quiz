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
  
<h1> Using the binomial model, and assumingthat a success occurs with probability (1/5)in each trial,find the probability that in 6 trials there are
</br>
</br>
(i)	0 successes (ii) 3 successes (iii) 2 failures.</h1>

</table>';


?>
</body>
</html>
