<?php

$errors = array();

//variable used for uploading images
$company_name = "";
$headimage = "";
$imagename="";


/*---------------------------------------------code for login user---------------------------------------------*/
if (isset($_POST['login'])) 
{ 
  echo "here : " . $_POST['login'];
    //taking value from the user
    $email = $_POST['email'];
    $password1 = $_POST['password1'];

    
    //validating the form
    if (empty($email)) { array_push($errors, "Email is required");}
    if (empty($password1)) { array_push($errors, "Password is required");}

    //validating user
    if (count($errors) == 0)
    {
      $results = login($email, $password1);

      if ($results == 0)
      { 
        session_start();
        $_SESSION['email'] = $email;
        header('location: admin_control.php');
      }
      else 
      {
        array_push($errors, "Please enter a valid username or password!");
      }
    

    }
}

/*--------------------------------------code for login user ends here------------------------------------------------------*/

?>

<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p>
		<div class="alert" role="alert">
		<?php echo $error ?>
		</div>	
		</p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>