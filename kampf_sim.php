<html>
<head>
<title>Kampfsimulator</title>

</head>
<body>
<table border="1">
<tr><th>Spieler</td></th><th>Gegner</th></tr>
<tr><td>

<?php
$Char_ID=$_GET['Char_ID'];
echo "Char_ID: " .$Char_ID;

?>

</td><td>
Name
HP
SP
etc
</td></tr>
<tr><td colspan="2">
Log mit Attacken und so
</td></td>
</table>
<input type="button" value="Zurück" onClick="self.location.href='char_edit.php'">
</body>
</html>