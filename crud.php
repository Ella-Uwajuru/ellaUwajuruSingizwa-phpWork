<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['sname'];
    $class=$_POST['class'];
    $dob=$_POST['age'];
    $gender=$_POST['gender'];

    $sql="INSERT INTO registration(firstname,lastname,Class,DOB,Gender)VALUES('$fname','$lname','$class','$dob','$gender')";
    $result=$connect->query($sql);
        if($result==TRUE){
           // echo"data was added successfully";
           header('location:display.php');
        }else{
          die(mysqli_error($connect));
        } ;       
    $conn->close();
    }
?>
