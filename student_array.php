<html>
<body>
<?php
$students=array("Amii","karu","shaikh","neff","Anu");
echo "Original array:<br>";
print_r($students);

asort($students);
echo "<br><br>Ascending order(asort);<br>";
print_r($students);

arsort($students);
echo"<br><br>Descending order(arsort);<br>";
print_r($ students);
?>
</body>
</html>
