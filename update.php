<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM `registration` WHERE id=$id";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$class=$row['Class'];
$dOB=$row['DOB'];
$gender=$row['Gender'];

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['sname'];
    $class=$_POST['class'];
    $dob=$_POST['age'];
    $gender=$_POST['gender'];

    $sql="UPDATE registration SET id='$id',fname='$fname',sname='$lname',class='$class',age='$dob',gender='$gender' WHERE id=$id";
    $result=$connect->query($sql);
        if($result==TRUE){
           // echo"updated successfully";
           //header('location:display.php')
        }else{
          die(mysqli_error($connect));
        }        
    $conn->close();
    }
    ?>
<html>
    <head>
        <title>Update</title>
        <style>
            *{
        margin: 0;
        
    }
  
    .input-update{
        background-color: rgb(226, 203, 54);
        border: none;
            font-size: 25px;
            padding:5px;
            border-radius: 5px;
            height:40px;
            width:100px;
            margin-top:20px;
    }
    .input-update:hover{
        height:50px;
            width:130px;
            color:beige;
    }
    .radio{
        margin:10px;
    }
            .header{
                text-align: center;
               background-color: lightgrey;
               font-family: san-serif;
              text-transform: uppercase;
              display: flex;
              flex-direction:column;
              justify-content:center;
              height:10vh;

            }
            
    .form-all{
        margin-top: 20px;
        font-size:30px;
        position: relative;
        top: 0px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        /* text-align: center; */
    }
    .input{
        border: 1px solid grey;
        margin-top:10px;
        margin: 15px;
        height: 45px;
        font-size: 30px;
        padding: 15px;
        border-radius: 5px;
        width: 500px;
    }
 
        </style>
    </head>
<body>
    <div class="root">
        <h1 class="header">Student Registry</h1>
        <div class="form-container">
            <form action="crud.php" method="post" autocomplete="off">
                <div class="form-all">
                    <div class="label">
                       <label for="fname">First Name</label><br>
                        <input type="text" class="input" name="fname" placeholder="first name" value=<?php echo $firstname ?>>
                   </div>
                   <div class="label">
                        <label for="sname">Last Name</label><br>
                         <input type="text" class="input" name="sname" placeholder="last name"  value=<?php echo $lastname ?>>
                    </div>
                    <div class="label">
                        <label for="class">Class</label><br>
                         <input type="text" class="input" name="class" placeholder="Class"  value=<?php echo $class ?>>
                    </div>
                    <div class="label">
                         <label for="age">DOB</label><br>
                        <input class="input" type="date" name="age" placeholder="D-O-B"  value=<?php echo $dOB ?>>
                    </div>
                    <div class="label">
                        <label for="gender">Gender</label><br>
                        <input class="radio" type="radio" name="gender" value="male">Male
                        <input  class="radio" type="radio" name="gender" value="female">Female
                    </div>  
                    <input class="input-update"type="submit" name="submit" value="Update" >
            </div>
            </form>
        </div>
        
    </div>
</body>
</html>
?>