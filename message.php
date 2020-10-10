
<?php 

include('dbconnect.php');

$name=$email=$mobile=$message=$submission='';
$errors=array('name'=>'','email'=>'','mobile'=>'','message'=>'');
if(isset($_POST['submit-contact'])){
    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $mobile=htmlspecialchars($_POST['mobile']);
    $message=htmlspecialchars($_POST['message']);

        // ************Double checking from server side can be altered starts here *********


        if(!preg_match('/^[a-zA-z@.,!%&() ]+$/',$name)){
            $errors['name']= 'Invalid name <br>';
            echo '<script type="text/javascript">
            location.replace("index.php#contact"); 
            </script>';
        }
        else{
            // echo $name;
        }

        if(!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',$email)){
            $errors['email']= 'Invalid Email <br>';
            echo '<script type="text/javascript">
            location.replace("index.php#contact");
            </script>';
        }
        else{
            // echo $investment;
        }

        if(!preg_match('/^[0-9]+$/',$mobile)){
            $errors['mobile']= 'Mobile no. can only have numbers <br>';
            echo '<script type="text/javascript">
            location.replace("index.php#contact");
            </script>';
        }
        else{
            // echo $investment;
        }

                // ************Double checking from server side can be altered ends here *********

    
    if(array_filter($errors)){
        // $ans= '';
        // echo '<script type="text/javascript">alert("email wrong");</script>';
    }
    else{



        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        //create sql
        $sql = "INSERT INTO `enquiry` (`name`, `email`, `mobile`, `message`) VALUES ('$name', '$email', '$mobile', '$message')";

        if(mysqli_query($conn, $sql)){
            //success

            $name=$email=$mobile=$message='';

            $submission='Submission Successful';
            echo '<script type="text/javascript">
            location.replace("index.php#contact");
            </script>';

   

            // header('Location: index.php#contact');       //this don't work here
        }
        else{
            //error
            echo 'query error: ' . mysqli_error(($conn));
        }


    }


}

?>







<!-- ************Contact Us starts here************ -->

<div class="heading" id="contact">
    Contact Us
</div>
<?php include 'dbconnect.php' ?>
<div class="form1" >
        <form action="index.php" id="contactform" name="contact-form" method="POST">
            <div id="green-text"><?php echo $submission; ?></div>
            <input type="text" id="name" name="name" placeholder="Name" pattern="^[a-zA-Z ]+$" value="<?php echo $name ?>" required>
            <div class="contact-error"> <?php echo $errors['name']; ?></div>
            <input type="text" id="email" name="email" placeholder="Email" pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" value="<?php echo $email ?>" required>
            <div class="contact-error"><?php echo $errors['email']; ?></div>
            <input type="text" id="mobile" pattern="^[0-9+-]+$" name="mobile" placeholder="Phone" value="<?php echo $mobile ?>" required>
            <div class="contact-error"><?php echo $errors['mobile']; ?></div>
            <textarea id="message" name="message" placeholder="Message Us" value="<?php echo $message ?>" required></textarea>
            <input type="submit"  name="submit-contact" value="Submit">
        </form>
</div>

<!-- ************Contact Us ends here************ -->
