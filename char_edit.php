<html>
  <head>
  </head>
  <body>
    <h1>Charakter Erstellung</h1>

<b>Wichtiger Hinweis:</b><br>
Dies ist nur zu Testzwecken geeignet und daher nicht optimal programmiert.<br> 
Zweck soll die einfache Nutzung des zu programmierenden Kampf-Simulators sein. <br>

<p>
   
    <form  method="post" action="join.php">
   <table rules='all'>
   
   <tr><td>Name:</td><td>
      <input type="text" name="Char_Name"    size="20" maxlength="25">
    </td></tr>
    
   <tr><td>Rasse (1-3):</td><td>
     <input type="int" name="Char_Race_ID"   size="20" maxlength="25">
     </td></tr>
    
   <tr><td>Titel:</td><td>
     <input type="text" name="Char_Titel"   size="20" maxlength="25">
     </td></tr>
     
   <tr><td>Level:</td><td>
     <input type="int" name="Char_Level"   size="20" maxlength="25">
   </td></tr>
     
   <tr><td>HP:</td><td>
     <input type="int" name="Char_HP"   size="20" maxlength="25">
    </td></tr> 
    
       <tr><td>SP:</td><td>
     <input type="int" name="Char_SP"   size="20" maxlength="25">
    </td></tr> 
    
   <tr><td>AttackPower:</td><td>
     <input type="int" name="Char_APower"    size="20" maxlength="25">
     </td></tr>
     
        <tr><td>DefPower:</td><td>
     <input type="int" name="Char_DPower"    size="20" maxlength="25">
   </td></tr>
   
   <tr><td>Agi:</td><td>
     <input type="int" name="Char_Agi"    size="20" maxlength="25">
   </td></tr>
   
   <tr><td>Dex:</td><td>
     <input type="int" name="Char_Dex"  size="20" maxlength="25">
   </td></tr>

<tr><td>
<input type="submit" value="Bestätigen">
<input type="reset" value="Rückgängig">
</tr></td>
</table>
  </body>
</html>

<?php

//php Part zur Ausgabe der bereits erstellten Charaktere


//datenbank einstellungen
require_once('db_data.php');



$sql= "SELECT * FROM charakter ORDER BY Char_ID";


$abfrage= mysql_query($sql);

//Überprüfung nach MySQL-AUftrag

   if(!$abfrage)
   
      {
      echo"<p> Die SQL Anweisung (DB Ausgabe) ist fehlgeschlagen...";
      }
      
$anzahl = mysql_num_rows($abfrage);

echo "<p>In der Charakterdatenbank befinden sich $anzahl Einträge:<p>";

echo "<table border='1'>";
echo   "<p><tr><th>Char_ID</th><th>Char_Name</th><th>Char_Race_ID</th><th>Char_Titel</th><th>Char_Level</th><th>Char_HP</th><th>Char_SP</th><th>Char_APower</th><th>Char_DPower</th><th>Char_Agi</th><th>Char_Dex</th><th>Erstellungsdatum</th></tr>";


while ($zeile=mysql_fetch_array($abfrage))

   {
   
   echo "<tr><td>" .$Char_ID=$zeile["Char_ID"] ."</td>";
   echo "<td>" .$zeile["Char_Name"] ."</td>";
   echo "<td>" .$zeile["Char_Race_ID"] ."</td>";
   echo "<td>" .$zeile["Char_Titel"] ."</td>";
   echo "<td>" .$zeile["Char_Level"] ."</td>";
   echo "<td>" .$zeile["Char_HP"] ."</td>";
   echo "<td>" .$zeile["Char_SP"] ."</td>";
   echo "<td>" .$zeile["Char_APower"] ."</td>";
   echo "<td>" .$zeile["Char_DPower"] ."</td>";
   echo "<td>" .$zeile["Char_Agi"] ."</td>";
   echo "<td>" .$zeile["Char_Dex"] ."</td>";
   echo "<td>" .$zeile["Char_Date"] ."</td>";
   echo "<td><input type='button' value='Kampf-Simulator' onClick=\"self.location.href='kampf_sim.php?Char_ID=" .$Char_ID ."'\"></td>";
   echo "</tr>";
      
   }
echo "</table>";
mysql_close($verbindung);




?>