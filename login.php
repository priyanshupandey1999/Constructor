<?php

/*------------------------------------------Function for login of user-----------------------------------------------------------*/

function login($email, $password1)
{
    //connecting to database
    include ('dbconnect.php');


    //query to validate the login user
    $query = "SELECT * FROM employee WHERE name='$email' AND password='$password1'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1)
    {
      return 0;
    }
    else
    {
      return 1;
    }
}
/*------------------------------------------end of function for login employee----------------------------------------------*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>Constructor</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<center>
    <section class="login-page">
        <div class="box">
            <form method="POST" name="loginform" id="loginform" autocomplete="off">

                <div class="form-head">
                    <h2>Constructor</h2>
                    <h3>Welcome !</h3>
                </div>
                <br>
                <?php include ('errors.php'); ?>

                <div class="form-body">
                    <input type="text" name="email" id="email" placeholder="Enter Email.." value="">
                    <br>
                    <input type="password" name="password1" id="password1" placeholder="Password" value="">
                </div>
                <br>

                <div class="form-footer">
                    <button type="submit" name="login" id="login" class="btn btn-info">Login</button>
                    <br><br>
                    
                </div>

            </form>
            
        </div>
        
    </section>
    </center>
</body>
</html>