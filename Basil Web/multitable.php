<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Simple Computation</title>
</head>
<body>
<?php
$size = 12;

echo '<marquee>';

for ($row = 1; $row <= $size; ++$row) {
for ($col = 1; $col <= $size; ++$col) {
printf('%5d', $row * $col);

}
echo '<br>';
}
echo '</pre>';
echo '</marquee>';
?>
</body>
</html>