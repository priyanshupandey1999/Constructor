    <!-------------------------------code for getting images to add ---------------------------------->
    <div class="container">
    <br><br><br>
    <?php $companyname = $_GET['companyname']; ?>
    <center>
    <div class="addportfolio">
        <section>
            <div class="companyname">
                <p>Company Name</p>
            </div>

            <div class="company_name">
                <p><?php displayname($companyname); ?></p>
            </div>
        </section>
        <br><br><br>
        <form class="box" method="POST" action="admincontroller.php" autocomplete="off" enctype="multipart/form-data" id="form_image">
            <div class="galleryimage">
                
                
                <input type="hidden" id="companyname" name="companyname" value="<?php echo $companyname; ?>">
                <input type="file" id="image" name="image[]" value="" class="image" multiple accept=".jpg, .jpeg, .gif, .png" required><br><br>
                <input type="submit" name="images" id="images" value="Add Images" class="btn btn-primary">
            </div>
        </form>
    </div>
    </center>
    </div>
    <!-------------------------------code ends here to get images-------------------------------------->
    