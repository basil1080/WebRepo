<!DOCTYPE html>
<!-- HTMLFormTest.php -->
<html lang="en">
<head>
<meta charset="utf-8">
<title>Test HTML Form</title>
</head>
<body>
<?php
if (isset($_POST['username'])) {
echo '<h2>hello, ' . htmlentities($_POST['username']) . '</h2>';
}
?>
<form method="post">
<label>What is your name? <input type="text" name="username"></label>
<input type="submit" value="submit">
</form>
</body>
</html>