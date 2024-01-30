<!DOCTYPE html>
<html>
<head>
<title>ArraySort</title>
<style> body{
max-width: 650px; margin: auto; border-style: outset;
}
</style>
</head>
<body><br>
<center><h2>Arrays Sort</h2></center><br>
<?php
$students = array("Basil", "Archana", "Sooraj", "Hari"); echo "<h3>Indexed array: </h3>";print_r($students); sort($students);
echo "<br><h4>Sorted array (sort): </h4>"; print_r($students);
rsort($students);
echo "<br><h4>Sorted array (rsort): </h4>"; print_r($students);
$age = array("Basil"=>"23", "Archana"=>"25", "Sooraj"=>"20","Hari"=>"28"); echo"<h3><br>Associated array: </h3>";
print_r($age); asort($age);
echo "<br><h4>Sorted array (asort): </h4>"; print_r($age);
arsort($age);
echo "<br><h4>Sorted array (arsort): </h4>"; print_r($age);
ksort($age);
echo "<br><h4>Sorted array (ksort): </h4>";
print_r($age); krsort($age);
echo "<br><h4>Sorted array (krsort): </h4>"; print_r($age);
?>
<br><br><br>
</body>
</html>