
<div class="admin_nav">
<div class="logo2">          
    <div class="logo">
        <img src="Images/logo.png" alt="">
    </div>
</div>
    <div class="logout_welcome">
    <?php  if (isset($_SESSION['email'])) : ?>
	    	            <p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
                        <p>| <a href="admin_control.php" style="color: rgb(77, 144, 245);" >Dashboard</a></p>
	    	            <p>| <a href="index.php?logout='1'" style="color: rgb(77, 144, 245);">Logout</a> </p>
	                <?php endif ?>
    </div>
</div>