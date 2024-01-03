<?php
$students = array("Ashwin", "Basil", "Archana", "Beema", "Benson");
echo "<h2> Student List:</h2>";
echo "<div class='student-list'>";
print_r($students);
echo "</div>";
asort($students);
echo "<h2>Ascending Order:</h2>";
echo "<div class='student-list'>";
print_r($students);
echo "</div>";
arsort($students);
echo "<h2>Descending Order:</h2>";
echo "<div class='student-list'>";
print_r($students);
echo "</div>";
?>