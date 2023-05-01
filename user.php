<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registry</title>
<style>
    *{
        margin: 0;
        
    }
    .root{
        font-size: 40px;
        height: 100vh;
        width: 100%;
        
      
    }

    .header{
        text-align: center;
        background-color: rgb(175, 175, 175);
        font-family: san-serif;
        text-transform: uppercase;

    }
    .form-all{
        position: relative;
        top: 0px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
     
    }
    .label{
        margin: 25px;
    }
    .input{
        background-color: rgb(199, 199, 199);
        border-top: none;
        border-left: none;
        border-right: none;
        margin: 5px;
        height: 40px;
        font-size: 30px;
        padding: 5px;
        border-radius: 5px;
        width: 300px;
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
                        <input type="text" class="input" name="fname" placeholder="first name">
                   </div>
                   <div class="label">
                        <label for="sname">Last Name</label><br>
                         <input type="text" class="input" name="sname" placeholder="last name">
                    </div>
                    <div class="label">
                        <label for="class">Class</label><br>
                         <input type="text" class="input" name="class" placeholder="Class">
                    </div>
                    <div class="label">
                         <label for="age">DOB</label><br>
                        <input class="input" type="date" name="age" placeholder="D-O-B">
                    </div>
                    <div class="label">
                        <label for="gender">Gender</label><br>
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                    </div>  
                    <input class="input"type="submit" name="submit" value="Register" >
            </div>
            </form>
        </div>
        
    </div>
</body>
</html>