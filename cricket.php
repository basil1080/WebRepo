<?php
// Array of Indian Cricket team players
$indianTeamPlayers = array( "Virat Kohli", "Rohit Sharma", "KL Rahul", "Rishabh Pant", "Hardik Pandya", "Ravindra Jadeja", "Jasprit Bumrah", "Mohammed Shami", "Shikhar Dhawan", "Ajinkya Rahane"
);
// HTML table header
echo "<table border='1'>
<tr>
<th>Player Name</th>
</tr>";
// Display player names in the table rows
foreach ($indianTeamPlayers as $player) {
echo "<tr>
<td>$player</td>
</tr>";
}
// Close the HTML table
echo "</table>";
?>