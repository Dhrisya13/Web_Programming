<html>
<body>
<?php
$players=array("sanju samson","Virat Kholi","Rohot Sharma","M.S.Dhoni","K.L.Rahul");
$players_no=array("9","18","45","7","1");
?>
<h2>INDIAN CRICKET PLAYERS</h2>

<table border="1" width="30%">
<tr>
<th>Player No</th>
<th>Player Name</th>
</tr>

<?php
for ($i=0;$i<count($players);$i++) {
echo "<tr>";
echo "<td>".$players_no[$i]."</td>";
echo "<td>".$players[$i]."</td>";
echo "</tr>";
}
?>
</table>
</body>
</html>
