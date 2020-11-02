<?php 
	
	$server_name = "server254";
	$db_username = "cptedx_user";
	$db_password = "M?Ap8BF4{FT2";
	$db_name = "cptedx_admin";

	$connection = mysqli_connect($server_name,$db_username,$db_password);
	$dbconfig = mysqli_select_db($connection,$db_name);

	if($dbconfig)
	{
		// echo "Database Connected";
	}
	else
	{
		echo '
				<div class="d-flex justify-content-center full-height full-width align-items-center">
					<div class="error-container text-center">
						<h1 class="error-number">Database Failure</h1>
						<h2 class="semi-bold">Database Connection Failed</h2>
						<p class="p-b-10">Please Check Your Database Connection</a>
						</p>
						<div class="error-container-innner text-center">
							<form class="error-form">
								<div class=" transparent text-left">
								</div>
							</form>
						</div>
					</div>
				</div>

		';
	}
?>