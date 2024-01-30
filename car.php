<html>
<head>
    <center>
    <body>
        <h2>car details</h2>
        <form name="carform"action="car.php"method="POST">
            <label for ="code">car code:</label>
            <input type="text" id="code"name="code"><br><br>
            <label for ="name">car name:</label>
            <input type="text" id="name"name="name"><br><br>
            <label for ="model">car model:</label>
            <input type="text" id="model"name="model"><br><br>
            <label for ="price">car price:</label>
            <input type="text" id="price"name="price"><br><br>
            <input type="submit" id="register"name="register">
        </form>
        <form name="search"action="car.php"method="POST";
            <label for ="code">car code:</label>
            <input type="text" name="code" id="code">
            <input type="submit" name="search" value="Search"  style="background-color: lightgreen;"><br><br>
        </form>
    </body>
</center>
</head>
<?php
$conn= mysqli_connect("localhost","root","","car");
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
echo"connected successfully<br>";
if (isset($_POST['register'])){
$car_code=$_POST['code'];
$car_name=$_POST['name'];
$car_model=$_POST['model'];
$car_price=$_POST['price'];
echo"The values are:".'<br>';
echo"car code:".$car_code.'<br>';
echo"car name:".$car_name.'<br>';
echo"car model:".$car_model.'<br>';
echo"car price:".$car_price.'<br>';
$sql1="insert into `car` (`car_code`, `car_name`, `car_model`, `car_price`) VALUES ('$car_code', '$car_name', '$car_model', '$car_price')";
if (mysqli_query($conn,$sql1)){
    echo"new record added";
}else
{
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}
}
if (isset($_POST['search'])){
    $car_code2= $_POST['code'];   
    echo "car code: ".$car_code2.'<br>';
    $sql="SELECT * from car where car_code=$car_code2 ";
    $res=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($res)){
        echo $row["car_code"].'<br>';
        echo $row["car_name"].'<br>';
        echo $row["car_model"].'<br>';
        echo $row["car_price"].'<br>';
    }
}        
?>
