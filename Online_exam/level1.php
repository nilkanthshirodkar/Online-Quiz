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
echo "<h2 class=head1> Select Group Test </h2>";

echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="one.php" class="style4">Sunayana</a></td>
  </tr>

  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="two.php" class="style4">Ulfa</a></td>
  </tr>

  <tr>
    <td height="58" valign="bottom"><img src="image/HLPBUTT2.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="three.php" class="style4">Nilkanth </a></td>
  </tr>
</table>';


?>
</body>
</html>
