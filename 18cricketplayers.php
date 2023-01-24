<html>
<body bgcolor="pink">
<h1 align=center>INDIAN TEAM</h1>
<center>
<?php
$name=["VIRAT KOHLI","SACHIN","DHONI","HURBAJAN SING","ROHITH SHARMA","DAVID WARNER","JADEJA","SURESH REYNA","GANGULI","STEVE SMITH","DAVID WARNER"];
$role=["BOWLER","WICKET KEEPER","RIGHT-HAND BATSMAN","RIGHT-HAND BATSMAN","RIGHT-HAND BATSMAN","FAST BOWLER","SPIN BOWLER","ALL ROUNDER","SPIN BOWLER","BATSMAN","ALL ROUNDER"];
echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>
<th>ROLE</th>";
 
for ($i=0;$i<11;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th><th>$role[$i]</th></tr>";
}
echo "</table>"
?>
</center<
</body>
</html>
