<?php

	include('security.php');

	include('includes/header.php');
    include('includes/navbar.php');
    
   
    if (isset($_POST['updatepassword']))
	 {
		$pass_id = $_POST['pass_id'];
		$oldpassword = $_POST['oldpassword'];
		$newpassword = $_POST['newpassword'];
		$repeatnewpassword = $_POST['repeatnewpassword'];

        
        if ($newpassword==$repeatnewpassword) {
        $query = "UPDATE register SET password='$newpassword' WHERE password='$oldpassword'";
		$query_run = mysqli_query($connection, $query);

		if ($query_run)
		 {
			$_SESSION['success'] = "Password Updated";
			header('Location: settings.php');
		}
		else
		{
			$_SESSION['status'] = "Password Not Updated";
			header('Location: settings.php');
		}
       } else {
        $_SESSION['status'] = "passwords do not match";
        header('Location: settings.php');
       }
    
}

?>


		

<div class="register-container full-height sm-p-t-30">
    <div class="d-flex justify-content-center flex-column full-height ">
    <?php
						if(isset($_SESSION['success']) && $_SESSION['success'] !='')
						{
							echo '
							<div class="alert alert-success" role="alert">
								<button class="close" data-dismiss="alert"></button>
								<strong>Success: </strong>'.$_SESSION['success'].'
							</div>';
							unset($_SESSION['success']);
						}
						if (isset($_SESSION['status']) && $_SESSION['status'] !='')
							{
							echo '<div class="alert alert-danger" role="alert">
							<button class="close" data-dismiss="alert"></button>
							<strong>Danger: </strong>'.$_SESSION['status'].'
							</div>';
							
							unset($_SESSION['status']);
						}
					?>
        <img src="assets/img/tedxelogo.svg" alt="logo" data-src="assets/img/tedxelogo.svg" data-src-retina="assets/img/tedxelogo.svg" width="78" height="22">
        <h3>CHANGE PASSWORD</h3>
        <?php
            if (isset($_POST['edit_password_btn']))
                {
                $id = $_POST['user_id'];

                $query = "SELECT * FROM register WHERE email='$id'";
                $query_run = mysqli_query($connection, $query);

                foreach ($query_run as $row )
                    {
                
                    ?>

        <form id="form-register" class="p-t-15" role="form" method="POST" >
            <input type="hidden" name="pass_id" value="<?php echo $row['id'] ?>">
									
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group form-group-default">
                        <label> Password</label>
                        <input type="password" name="oldpassword" placeholder="your password" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group form-group-default">
                        <label>New Password</label>
                        <input type="password" name="newpassword"  placeholder="Minimum of 6 Charactors" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group form-group-default">
                        <label>Repeat New Password</label>
                        <input type="password" name="repeatnewpassword" placeholder="Repeat New Password" class="form-control" required>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary btn-cons m-t-10" name="updatepassword" type="submit">Update</button>
        </form>
        <?php
                    } 
            }
        ?>
    </div>
</div>



<?php 
	include('includes/scripts.php');
	include('includes/footer.php');
?>
