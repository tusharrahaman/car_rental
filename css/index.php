<?php
include('dbConn.php');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = mysqli_query($con, "insert into students(name,address,email,phone)value('$name','$address','$email','$phone')");

    if($query){
        echo "<script>alert('Student information inseted');</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Phone No:</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Add Student"></td>
            </tr>
        </table>
    </form>
</body>
</html>