<html>
<head>
<title>Join-Battlesim</title>

</head>
<body>

<?php
$currtime = date("YmdHis",time());

require_once('db_data.php');

$Char_Name=$_POST["Char_Name"];
$Char_Race_ID=$_POST["Char_Race_ID"];
$Char_Titel=$_POST["Char_Titel"];
$Char_Level=$_POST["Char_Level"];
$Char_HP=$_POST["Char_HP"];
$Char_SP=$_POST["Char_SP"];
$Char_APower=$_POST["Char_APower"];
$Char_DPower=$_POST["Char_DPower"];
$Char_Agi=$_POST["Char_Agi"];
$Char_Dex=$_POST["Char_Dex"];

// DB Name Check

$sql0 ="SELECT Char_Name FROM charakter WHERE Char_Name LIKE '$Char_Name'";
$abfrage0 = mysql_query($sql0);

$anzahl0 = mysql_num_rows($abfrage0);

//falls die Spalten die erfasst werden größer als 1 sind -> logischerweise schon der Name in der DB

if($anzahl0 >= '1')
{
echo "Name bereits vorhanden<p>";
}

// else wird der Eintrag vorgenommen

else

{

$sql ="INSERT INTO charakter (Char_ID, Char_Name, Char_Race_ID, Char_Titel, Char_Level, Char_HP, Char_SP, Char_APower, Char_DPower, Char_Agi, Char_Dex, Char_Date)";
$sql .=" VALUES(NULL, '$Char_Name', '$Char_Race_ID', '$Char_Titel', '$Char_Level', '$Char_HP', '$Char_SP', '$Char_APower', '$Char_DPower', '$Char_Agi', '$Char_Dex', $currtime)";



$abfrage = mysql_query($sql);

   if($abfrage)
   {
   echo "Ein neuer Eintrag wurde vorgenommen<p>";
   
   }
   else
   {
   echo "Eintrag konnte nicht durchgeführt werden<p>";
   }
   
// Hier wird noch schnell die ID für die Übergabe zum Kampfsim ermittelt   
   
$sql2 ="SELECT Char_ID FROM charakter WHERE Char_Name LIKE '$Char_Name'";
$abfrage2 = mysql_query($sql2);


while ($zeile=mysql_fetch_array($abfrage2))

   {
   
   $Char_ID=$zeile["Char_ID"];

      
   }

   echo "Char_ID: ". $Char_ID ."<p>";
   mysql_close($verbindung);
   
}   

?>
<input type="button" value="Zurück" onClick="self.location.href='char_edit.php'">
<input type='button' value='Kampf-Simulator' onClick="self.location.href='kampf_sim.php?Char_ID=<?php echo $Char_ID;?>'">
</body>
</html>