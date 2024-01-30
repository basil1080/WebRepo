<!DOCTYPE html>
<html>

<head>
    <style>
        #regform {
            border: 5px outset biege;
            background-color: biege;
            text-align: center;
            width: 60%; /* Adjusted width */
            margin: auto;
            padding: 20px; /* Added padding */
        }

        table,
        tr,
        td,
        th {
            border: 1px solid black;
        }

        /* Added some styling for labels to display inline */
        label {
            display: inline-block;
            width: 100px; /* Adjust width as needed */
            text-align: left; /* Align text to the left */
        }

        /* Adjust input fields for better alignment */
        input[type="text"] {
            width: 200px; /* Adjust width as needed */
        }
    </style>
</head>

<body bgcolor="beige">
    <div id="regform">

        <h2>BOOK STORE</h2>
        <form name="bookForm" action="form.php" method="post">
            <label for="id">Book ID:</label>
            <input type="text" id="id" name="id"><br><br>
            <label for="name">Book Name:</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="author">Book Author:</label>
            <input type="text" id="author" name="author"><br><br>
            <label for="price">Book Price:</label>
            <input type="text" id="price" name="price"><br><br>
            <input type="submit" name="register" value="register" style="background-color: lightgreen;"><br><br>
        </form>

        <h4>SEARCH BOOK DATA</h4>
        <form name="searchForm" action="form.php" method="post">
            <label for="tot">ID:</label>
            <input type="text" name="id" id="id">
            <input type="submit" name="search" value="Search"  style="background-color: lightgreen;"><br><br>
        </form>




<?php
$conn= mysqli_connect("localhost","root","","books");
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
if (isset($_POST['register'])){
$book_id = $_POST['id'];
$book_name = $_POST['name'];
$book_author = $_POST['author'];
$book_price = $_POST['price'];
echo " The values are: ".'<br>';
echo "book_id: ".$book_id.'<br>';
echo "book_name: ".$book_name.'<br>';
echo "book_author: ".$book_author.'<br>';
echo "book_price: ".$book_price.'<br>';
$sql1="insert into `books` (`book_id`, `book_name`, `book_author`, `book_price`) VALUES ('$book_id', '$book_name', '$book_author', '$book_price')";
// $sql1="INSERT INTO 'books' VALUES ('$book_id', '$book_name', '$book_author', '$book_price')";
if (mysqli_query($conn, $sql1)) {
echo "<br>New record created successfully";
} else {
echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}
}
if (isset($_POST['search'])){
$book_id2= $_POST['id'];   
echo "book_id: ".$book_id2.'<br>';
$sql="SELECT * from books where book_id=$book_id2 ";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
    echo $row["book_id"].'<br>';
    echo $row["book_name"].'<br>';
    echo $row["book_author"].'<br>';
    echo $row["book_price"].'<br>';
}
}
?>