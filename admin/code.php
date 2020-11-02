<?php

	session_start();
	
	include('security.php');
	header('Content-Type: text/html; charset=utf-8');

	if (isset($_POST['speaker_save'])) 
	{
		$sname = mysqli_real_escape_string($connection, $_POST['speaker_name']);
		$soccupation = mysqli_real_escape_string($connection, $_POST['speaker_occupation']);
		$sevent_name = mysqli_real_escape_string($connection, $_POST['event_name']);
		$event_id = mysqli_real_escape_string($connection, $_POST['event_id']);
		$sinstagram = mysqli_real_escape_string($connection, $_POST['speaker_instagram']);
		$slinkedin = mysqli_real_escape_string($connection, $_POST['speaker_linkedin']);
		$stwitter = mysqli_real_escape_string($connection, $_POST['speaker_twitter']);
		$simages = $_FILES['speaker_image']['name'];
		$svideo = $_POST['video_url'];
		$stype = mysqli_real_escape_string($connection, $_POST['talk_type']);
		$stitle = mysqli_real_escape_string($connection, $_POST['talk_title']);
		$sbio = mysqli_real_escape_string($connection, $_POST['speaker_bio']);
		$stags = mysqli_real_escape_string($connection, $_POST['speaker_tags']);

		

		if (file_exists('speakerupload/' .$_FILES['speaker_image']['name']))
		 {

		 	$store = $_FILES['speaker_image']['name'];
		 	$_SESSION['status']= "Image already exists. '.$store.'";
		 	header('Location: speakers.php');
		 }
		 else
		 {
			//$stmt = $conection->prepare("INSERT INTO speakers (`name`, `occupation`, `event_name`, `event_id`, `instagram`, `linkedin`, `twitter`, `images`, `video_url`, `talk_type`, `talk_title`, `speaker_bio`, `speaker_tags`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
			//$stmt-> bind_param("sssssssssssss", $sname, $soccupation, $sevent_name, $event_id, $sinstagram, $slinkedin, $stwitter, $simages, $svideo, $stype, $stitle, $sbio, $stags);
			//if($stmt->execute()){
			//	move_uploaded_file($_FILES['speaker_image']['tmp_name'], 'speakerupload/'.$_FILES['speaker_image']['name']); 
				//$_SESSION['success'] = "Speaker Added";
				//$_SERVER['REQUEST_URI'];
				//header('Location: events.php');
		//}else{
		//	$_SESSION['status'] = "Speaker Not Added";
			//	header('Location: events.php');
		//}	

			$query = "INSERT INTO speakers (`name`, `occupation`, `event_name`, `event_id`, `instagram`, `linkedin`, `twitter`, `images`, `video_url`, `talk_type`, `talk_title`, `speaker_bio`, `speaker_tags`) VALUES ('$sname', '$soccupation', '$sevent_name', '$event_id', '$sinstagram', '$slinkedin', '$stwitter', '$simages', '$svideo', '$stype', '$stitle', '$sbio', '$stags')";
			$query_run = mysqli_query($connection, $query);

			if ($query_run)
			 {
			 	move_uploaded_file($_FILES['speaker_image']['tmp_name'], 'speakerupload/'.$_FILES['speaker_image']['name']); 
				$_SESSION['success'] = "Speaker Added";
				$_SERVER['REQUEST_URI'];
				header('Location: events.php');
			}
			else
			{
				$_SESSION['status'] = "Speaker Not Added";
				header('Location: events.php');
			}

		}

	}



	if (isset($_POST['event_save'])) 
	{
		$event_image = $_FILES['event_image']['name'];
		$event_name = mysqli_real_escape_string ($conection, $_POST['event_name']);
		$event_theme = mysqli_real_escape_string ($conection, $_POST['event_theme']);
		$event_date = mysqli_real_escape_string ($conection, $_POST['event_date']);
		$about_event = mysqli_real_escape_string ($conection, $_POST['about_event']);

		
		if (file_exists('upload/' .$_FILES['event_image']['name']))
		 {

		 	$store = $_FILES['event_image']['name'];
		 	$_SESSION['status']= "Image already exists. '.$store.'";
		 	header('Location: events.php');
		 }
		 else
		 {
			$check_name = $connection->query("SELECT event_name FROM events WHERE event_name='$event_name'");
			$count=$check_name->num_rows;

			if ($count==0) {
		
				$query = "INSERT INTO events (`event_image`, `event_name`, `event_theme`, `event_date`, `about_event`, `event_file`) VALUES ('$event_image', '$event_name', '$event_theme', '$event_date', '$about_event', '$event_file')";
				$query_run = mysqli_query($connection, $query);

				if ($query_run) {
					move_uploaded_file($_FILES['event_image']['tmp_name'], 'upload/'.$_FILES['event_image']['name']); 
					$_SESSION['success'] = "Event Added";
					header('Location: events.php');
				}else {
					$_SESSION['status'] = "Event Not Added";
					header('Location: events.php');
				}
				
			} else {
				$_SESSION['status'] = "Event Already Exists";
				header('Location: events.php');
			}	
		
		}
	}


	if (isset($_POST['event_more_save'])) 
	{
		$id = $_POST['more_id'];
		$event_file = $_FILES['event_file']['name'];

		
		if (file_exists('upload/' .$_FILES['event_file']['name']))
		 {

		 	$store = $_FILES['event_file']['name'];
		 	$_SESSION['status']= "File already exists. '.$store.'";
		 	header('Location: events.php');
		 }
		 else
		 {
			$query = "UPDATE events SET event_file='$event_file' WHERE id='$id'";
		
			$query_run = mysqli_query($connection, $query);

			
			if ($query_run)
			 {
				 move_uploaded_file($_FILES['event_file']['tmp_name'], 'upload/'.$_FILES['event_file']['name']); 
				$_SESSION['success'] = "Event Details Added";
				header('Location: events.php');
			}
			else
			{
				$_SESSION['status'] = "Event Details Not Added";
				header('Location: events.php');
			}

		}
	}



	if (isset($_POST['gallery_save'])) 
	{
		$sname = mysqli_real_escape_string ($conection, $_POST['name']);
		$soccupation = mysqli_real_escape_string ($conection, $_POST['speaker_occupation']);
		$sevent_name = mysqli_real_escape_string ($conection, $_POST['event_name']);
		$event_id = mysqli_real_escape_string ($conection, $_POST['event_id']);
		$sinstagram = mysqli_real_escape_string ($conection, $_POST['speaker_instagram']);
		$slinkedin = mysqli_real_escape_string ($conection, $_POST['speaker_linkedin']);
		$stwitter = mysqli_real_escape_string ($conection, $_POST['speaker_twitter']);
		$simages = $_FILES['images']['name'];
		$svideo = $_POST['video_url'];
		$stype = mysqli_real_escape_string ($conection, $_POST['talk_type']);
		$stitle = mysqli_real_escape_string ($conection, $_POST['talk_title']);
		$sbio = mysqli_real_escape_string ($conection, $_POST['speaker_bio']);
		$stags = mysqli_real_escape_string ($conection, $_POST['speaker_tags']);
		

		if (file_exists('speakerupload/' .$_FILES['images']['name']))
		 {

		 	$store = $_FILES['images']['name'];
		 	$_SESSION['status']= "Image already exists. '.$store.'";
		 	header('Location: gallery.php');
		 }
		 else
		 {
			$query = "INSERT INTO speakers (`name`, `occupation`, `event_name`, `event_id`, `instagram`, `linkedin`, `twitter`, `images`, `video_url`, `talk_type`, `talk_title`, `speaker_bio`, `speaker_tags`) VALUES ('$sname', '$soccupation', '$sevent_name', '$event_id', '$sinstagram', '$slinkedin', '$stwitter', '$simages', '$svideo', '$stype', '$stitle', '$sbio', '$stags')";
			$query_run = mysqli_query($connection, $query);
			
			if ($query_run)
			 {
			 	move_uploaded_file($_FILES['images']['tmp_name'], 'speakerupload/'.$_FILES['images']['name']); 
				$_SESSION['success'] = "Gallery Added";
				header('Location: gallery.php');
			}
			else
			{
				$_SESSION['status'] = "Gallery Not Added";
				header('Location: gallery.php');
			}

		}

	}


	if (isset($_POST['partner_save'])) 
	{
		$partner_image = $_FILES['partner_image']['name'];
		$partner_name = mysqli_real_escape_string ($conection, $_POST['partner_name']);
		$partner_type = mysqli_real_escape_string ($conection, $_POST['partner_type']);
		

		if (file_exists('partner/' .$_FILES['partner_image']['name']))
		 {

		 	$store = $_FILES['partner_image']['name'];
		 	$_SESSION['status']= "Image already exists. '.$store.'";
		 	header('Location: partners.php');
		 }
		 else
		 {
			$query = "INSERT INTO partners (`partner_image`, `partner_name`, `partner_type`) VALUES ('$partner_image', '$partner_name', '$partner_type')";
			$query_run = mysqli_query($connection, $query);

			
			if ($query_run)
			 {
			 	move_uploaded_file($_FILES['partner_image']['tmp_name'], 'partner/'.$_FILES['partner_image']['name']); 
				$_SESSION['success'] = "Partner Added";
				header('Location: partners.php');
			}
			else
			{
				$_SESSION['status'] = "Partner Not Added";
				header('Location: partners.php');
			}

		}

	}





	if (isset($_POST['homepage_update_btn']))
	 {
		$edit_head =  mysqli_real_escape_string ($conection, $_POST['edit_head']);
		$edit_text =  mysqli_real_escape_string ($conection, $_POST['edit_text']);
		$edit_head2 =  mysqli_real_escape_string ($conection, $_POST['edit_head2']);
		$edit_text2 =  mysqli_real_escape_string ($conection, $_POST['edit_text2']);
		$edit_section2cap =  mysqli_real_escape_string ($conection, $_POST['edit_section2cap']);
		$edit_video_url = $_POST['edit_video_url'];
		
		$query = "UPDATE homepage SET head='$edit_head', headtext='$edit_text', head2='$edit_head2', headtext2='$edit_text2', section2cap='$edit_section2cap'";
		$query_run = mysqli_query($connection, $query);

		if ($query_run)
		 {
			$_SESSION['success'] = "Data Updated";
			header('Location: home.php');
		}
		else
		{
			$_SESSION['status'] = "Data Not Updated";
			header('Location: home.php');
		}
	}


	if (isset($_POST['home_update_btn'])) 
	{
		$edit_home_id = $_POST['edit_home_id'];
		$edit_section2cap =  mysqli_real_escape_string ($conection, $_POST['edit_section2cap']);
		$edit_video_url = $_POST['edit_video_url'];
		$edit_file = $_POST['edit_file'];
		$edit_file_link = $_POST['edit_file_link'];
		$edit_head =  mysqli_real_escape_string ($conection, $_POST['edit_head']);
		$edit_text =  mysqli_real_escape_string ($conection, $_POST['edit_text']);
		$edit_home_image  =  $_FILES['edit_home_image']['name'];
		

		move_uploaded_file($_FILES['edit_home_image']['tmp_name'], 'upload/'.$_FILES['edit_home_image']['name']);
		if ((!($_FILES['edit_home_image']['name']))) {
			$update = "UPDATE homepage SET section2cap='$edit_section2cap', video_url='$edit_video_url',   head='$edit_head', headtext='$edit_text' WHERE id='$edit_home_id'";
		} else {
			$update = "UPDATE homepage SET section2cap='$edit_section2cap', video_url='$edit_video_url',   head='$edit_head', headtext='$edit_text',  images='$edit_home_image' WHERE id='$edit_home_id'";
		}

		$run = mysqli_query($connection, $update);
		if ($run) 
		{
			
			$_SESSION['success'] = "Home Page Updated";
			header('Location: home.php');
		}

		else
		{
			$_SESSION['status'] = "Homepage Not Updated";
			header('Location: home.php');
		}
	}

	
	if (isset($_POST['home_update_btn2'])) 
	{
		$edit_home_id = $_POST['edit_home_id'];
		$edit_section2cap =  mysqli_real_escape_string ($conection, $_POST['edit_section2cap']);
		$edit_video_url = $_POST['edit_video_url'];
		$edit_file = $_POST['edit_file'];
		$edit_file_link = $_POST['edit_file_link'];
		$edit_head =  mysqli_real_escape_string ($conection, $_POST['edit_head']);
		$edit_text =  mysqli_real_escape_string ($conection, $_POST['edit_text']);
		$edit_file_link  =  $_FILES['edit_file_link']['name'];
		

		move_uploaded_file($_FILES['edit_file_link']['tmp_name'], 'upload/'.$_FILES['edit_file_link']['name']);
		if ((!($_FILES['edit_file_link']['name']))) {
			$update = "UPDATE homepage SET file_title='$edit_file' WHERE id='$edit_home_id'";
		} else {
			$update = "UPDATE homepage SET file_title='$edit_file',  file_link='$edit_file_link' WHERE id='$edit_home_id'";
		}

		$run = mysqli_query($connection, $update);
		if ($run) 
		{
			
			$_SESSION['success'] = "Home Page Updated";
			header('Location: home.php');
		}

		else
		{
			$_SESSION['status'] = "Homepage Not Updated";
			header('Location: home.php');
		}
	}

	

	if (isset($_POST['speaker_update_btn'])) 
	{

		$edit_id = $_POST['edit_id'];
		$edit_name = mysqli_real_escape_string ($connection, $_POST['edit_name']);
		$edit_occupation =  mysqli_real_escape_string ($connection, $_POST['edit_occupation']);
		$edit_instagram = $_POST['edit_instagram'];
		$edit_linkedin = $_POST['edit_linkedin'];
		$edit_twitter = $_POST['edit_twitter'];
		$edit_speaker_image  =  $_FILES['edit_speaker_image']['name'];
		$video_url = $_POST['video_url'];
		$talk_type = mysqli_real_escape_string ($connection, $_POST['talk_type']);
		$talk_title = mysqli_real_escape_string ($connection, $_POST['talk_title']);
		$speaker_bio = mysqli_real_escape_string ($connection, $_POST['speaker_bio']);
		$speaker_tags = mysqli_real_escape_string ($connection, $_POST['speaker_tags']);

		$allowed = array ('image/pjpeg', 'image/jpeg', 'image/JPG', 'image/X-PNG', 'image/PNG', 'image/png', 'image/x-png');
		if (in_array($_FILES['upload']['type'], $allowed)) {

		move_uploaded_file($_FILES['edit_speaker_image']['tmp_name'], 'speakerupload/'.$_FILES['edit_speaker_image']['name']);


			if ((!($_FILES['edit_speaker_image']['name']))) {
				$update = "UPDATE speakers SET name='$edit_name', occupation='$edit_occupation', instagram='$edit_instagram', linkedin='$edit_linkedin', twitter='$edit_twitter', video_url='$video_url', talk_type='$talk_type', talk_title='$talk_title', speaker_bio='$speaker_bio', speaker_tags='$speaker_tags'  WHERE id='$edit_id'";
			} else {
				$update = "UPDATE speakers SET name='$edit_name', occupation='$edit_occupation', instagram='$edit_instagram', linkedin='$edit_linkedin', twitter='$edit_twitter', images='$edit_speaker_image', video_url='$video_url', talk_type='$talk_type', talk_title='$talk_title', speaker_bio='$speaker_bio', speaker_tags='$speaker_tags' WHERE id='$edit_id'";
			}
		} else {
			
		}
		
		$run = mysqli_query($connection, $update);
		if ($run) 
		{
			
			$_SESSION['success'] = "Speaker Updated";
			header('Location: events.php');
		}

		else
		{
			$_SESSION['status'] = "Speaker Not Updated";
			header('Location: events.php');
		}
	}


	if (isset($_POST['update_team_btn'])) 
	{
		$edit_team_id = $_POST['edit_team_id'];
		$edit_team_image  =  $_FILES['edit_team_image']['name'];
		$edit_team_name =  mysqli_real_escape_string ($conection, $_POST['edit_team_name']);
		$edit_team_role =  mysqli_real_escape_string ($conection, $_POST['edit_team_role']);
		$edit_team_bio =  mysqli_real_escape_string ($conection, $_POST['edit_team_bio']);
		

		move_uploaded_file($_FILES['edit_team_image']['tmp_name'], 'teamupload/'.$_FILES['edit_team_image']['name']);
		if ((!($_FILES['edit_team_image']['name']))) {
			$update = "UPDATE about_team SET  name='$edit_team_name', role='$edit_team_role', bio='$edit_team_bio' WHERE id='$edit_team_id'";
		} else {
			$update = "UPDATE about_team SET images='$edit_team_image', name='$edit_team_name', role='$edit_team_role', bio='$edit_team_bio' WHERE id='$edit_team_id'";
		}

		$run = mysqli_query($connection, $update);
		if ($run) 
		{
			
			$_SESSION['success'] = "Team Updated";
			header('Location: about.php');
		}

		else
		{
			$_SESSION['status'] = "Team Not Updated";
			header('Location: about.php');
		}
	}



	if (isset($_POST['update_partners_btn'])) 
	{
		$edit_partner_id = $_POST['edit_partner_id'];
		$edit_partner_image  =  $_FILES['edit_partner_image']['name'];
		$edit_partner_name = $_POST['edit_partner_name'];
		$edit_partner_type = $_POST['edit_partner_type'];
	
		move_uploaded_file($_FILES['edit_partner_image']['tmp_name'], 'partner/'.$_FILES['edit_partner_image']['name']);

		if ((!($_FILES['edit_partner_image']['name']))) {
			$update = "UPDATE partners SET  partner_name='$edit_partner_name', partner_type='$edit_partner_type' WHERE id='$edit_partner_id'";
		} else {
			$update = "UPDATE partners SET partner_image='$edit_partner_image', partner_name='$edit_partner_name', partner_type='$edit_partner_type' WHERE id='$edit_partner_id'";
		}

		$run = mysqli_query($connection, $update);
		if ($run) 
		{
			
			$_SESSION['success'] = "Partner Updated";
			header('Location: partners.php');
		}

		else
		{
			$_SESSION['status'] = "Partner Not Updated";
			header('Location: partners.php');
		}
	}





	if (isset($_POST['update_gallery_btn'])) 
	{
		

		$gallery_id = $_POST['gallery_id'];
		$event_image  =  $_FILES['edit_image']['name'];
		$talk_type =  mysqli_real_escape_string ($conection, $_POST['talk_type']);
		$video_name =  mysqli_real_escape_string ($conection, $_POST['video_name']);
		$event_name =  mysqli_real_escape_string ($conection, $_POST['event_name']);
		$video_url = $_POST['video_url'];
		

		move_uploaded_file($_FILES['edit_image']['tmp_name'], 'speakerupload/'.$_FILES['edit_image']['name']);

		if ((!($_FILES['edit_image']['name']))) {
			$update = "UPDATE speakers SET talk_type='$talk_type', name='$video_name', event_name='$event_name', video_url='$video_url'  WHERE id='$gallery_id'";
		} else {
			$update = "UPDATE speakers SET talk_type='$talk_type', name='$video_name', event_name='$event_name', video_url='$video_url', images='$event_image' WHERE id='$gallery_id'";
		}

		$run = mysqli_query($connection, $update);
		if ($run) 
		{
			
			$_SESSION['success'] = "Gallery Updated";
			header('Location: gallery.php');
		}

		else
		{
			$_SESSION['status'] = "Gallery Not Updated";
			header('Location: gallery.php');
		}
	}


	if (isset($_POST['update_event_btn'])) 
	{
		$event_id = $_POST['event_id'];
		$event_image  =  $_FILES['event_image']['name'];
		$event_name =  mysqli_real_escape_string ($conection, $_POST['event_name']);
		$event_theme =  mysqli_real_escape_string ($conection, $_POST['event_theme']);
		$event_date =  $_POST['event_date'];
		$about_event =  mysqli_real_escape_string ($conection, $_POST['about_event']);
		

		move_uploaded_file($_FILES['event_image']['tmp_name'], 'upload/'.$_FILES['event_image']['name']);
		
		if ((!($_FILES['event_image']['name']))) {
			$update = "UPDATE events SET event_name='$event_name', event_theme='$event_theme', event_date='$event_date', about_event='$about_event'  WHERE id='$event_id'";
		
		} else {
			$update = "UPDATE events SET event_name='$event_name', event_theme='$event_theme', event_date='$event_date', about_event='$about_event', event_image='$event_image ' WHERE id='$event_id'";
		}

		$run = mysqli_query($connection, $update);
		if ($run) 
		{
			
			$_SESSION['success'] = "Event Updated";
			header('Location: events.php');
		}

		else
		{
			$_SESSION['status'] = "Event Not Updated";
			header('Location: events.php');
		}
	}


	if (isset($_POST['speaker_delete_btn'])) 
	{
		$id = $_POST['delete_id'];

		$query = "DELETE  FROM speakers WHERE id='$id'";
		$query_run = mysqli_query($connection, $query);

		if ($query_run)
		{
			$_SESSION['success'] = "Your Speaker Data is Deleted";
			header('Location: events.php');
		}
		else
		{
			$_SESSION['status'] = "Your Speaker Data Not Deleted";
			header('Location: events.php');
		}
	}

	if (isset($_POST['partners_delete_btn'])) 
	{
		$id = $_POST['partners_delete_id'];

		$query = "DELETE  FROM partners WHERE id='$id'";
		$query_run = mysqli_query($connection, $query);

		if ($query_run)
		{
			$_SESSION['success'] = "Your Partner Data is Deleted";
			header('Location: partners.php');
		}
		else
		{
			$_SESSION['status'] = "Your Partner Data Not Deleted";
			header('Location: partners.php');
		}
	}


	if (isset($_POST['event_delete_btn'])) 
	{
		$id = $_POST['eventdelete_id'];

		$query = "DELETE FROM events WHERE id='$id'";
		$query_run = mysqli_query($connection, $query);

		if ($query_run)
		{
			$_SESSION['success'] = "Event And All Its Data Has Been Deleted";
			header('Location: events.php');
		}
		else
		{
			$_SESSION['status'] = "Event Data Not Deleted";
			header('Location: events.php');
		}
	}


	if (isset($_POST['event_delete_btn'])) 
	{
		$id = $_POST['eventdelete_id'];

		$query = "DELETE FROM speakers WHERE event_id='$id'";
		$query_run = mysqli_query($connection, $query);

		if ($query_run)
		{
			$_SESSION['success'] = "Event And All Its Data Has Been Deleted";
			header('Location: events.php');
		}
		else
		{
			$_SESSION['status'] = "Event Data Not Deleted";
			header('Location: events.php');
		}
	}


	if (isset($_POST['gallery_delete_btn'])) 
	{
		$id = $_POST['gallerydelete_id'];

		$query = "DELETE  FROM gallery WHERE id='$id'";
		$query_run = mysqli_query($connection, $query);

		if ($query_run)
		{
			$_SESSION['success'] = "Your Gallery Data is Deleted";
			header('Location: gallery.php');
		}
		else
		{
			$_SESSION['status'] = "Your Gallery Data Not Deleted";
			header('Location: gallery.php');
		}
	}





	if(isset($_POST['delete_team_btn']))
	{
		$id = $_POST['delete_team_id'];

		$query = "DELETE FROM about_team WHERE id='$id'";
		$query_run = mysqli_query($connection, $query);

		if ($query_run) 
		{
			$_SESSION['success'] = "Your Data Is Deleted";
			header('Location: about.php');
		}
		else
		{
			$_SESSION['status'] = "Your Data is Not Deleted";
			header('Location: about.php');
		}
	}





	if (isset($_POST['aboutdetails_update_btn']))
	 {
		$edit_about_text = mysqli_real_escape_string ($conection, $_POST['edit_about_text']);
		$edit_about_text2 = mysqli_real_escape_string ($conection, $_POST['edit_about_text2']);
		

		$query = "UPDATE about_details SET abouttext='$edit_about_text', abouttext2='$edit_about_text2' ";
		$query_run = mysqli_query($connection, $query);


		if ($query_run) 
		{
			$_SESSION['success'] = "Your Data Is Updated";
			header('Location: about.php');
		}
		else
		{
			$_SESSION['status'] = "Your Data Is Not Updated";
			header('Location: about.php');
		}
	}


	if (isset($_POST['aboutted_update_btn']))
	 {
		
		$edit_tedabout_text = mysqli_real_escape_string ($conection, $_POST['edit_tedabout_text']);
		$edit_tedabout_text2 = mysqli_real_escape_string ($conection, $_POST['edit_tedabout_text2']);

		$query = "UPDATE about_ted SET tedabouttext='$edit_tedabout_text', tedabouttext2='$edit_tedabout_text2' ";
		$query_run = mysqli_query($connection, $query);


		if ($query_run) 
		{
			$_SESSION['success'] = "Your Data Is Updated";
			header('Location: about.php');
		}
		else
		{
			$_SESSION['status'] = "Your Data Is Not Updated";
			header('Location: about.php');
		}
	}

	
	if(isset($_POST['registerbtn']))
	{
		$firstname = mysqli_real_escape_string ($conection, $_POST['firstname']);
		$lastname = mysqli_real_escape_string ($conection, $_POST['lastname']);
		$username = mysqli_real_escape_string ($conection, $_POST['username']);
		$password = mysqli_real_escape_string ($conection, $_POST['password']);
		$email = mysqli_real_escape_string ($conection, $_POST['email']);

		$query = "INSERT INTO  register (firstname,lastname,username,password,email) VALUES ('$firstname','$lastname','$username','$password','$email')";
		$query_run = mysqli_query($connection, $query);

		if ($query_run) {
			
			$_SESSION['success'] = "Admin Profile Added";
			header('Location: login.php');
		}
		else
		{
			$_SESSION['status'] = "Admin Profile Not Added";
			header('Location: registerxy.php');
		}
	}




	if (isset($_POST['login_btn'])) 
	{
		$email_login = mysqli_real_escape_string ($connection, $_POST['email']);
		$password_login = $_POST['password'];

		$query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login'";
		$query_run = mysqli_query($connection, $query);

		if(mysqli_fetch_array($query_run))
		{
			$_SESSION['username'] = $email_login;
			header('Location: index.php');
		}
		else
		{
			$_SESSION['status'] = 'Email id / Password is invalid';
			header('Location: login.php');
		}
	}


	if (isset($_POST['about_save'])) 
	{
		$title = mysqli_real_escape_string ($conection, $_POST['name']);
		$subtitle = mysqli_real_escape_string ($conection, $_POST['subtitle']);
		$description = mysqli_real_escape_string ($conection, $_POST['description']);
		$links = mysqli_real_escape_string ($conection, $_POST['links']);


		$query = "INSERT INTO abouts (title,subtitle,description,links) VALUES ('$title','$subtitle','$description','$links')";
		$query_run = mysqli_query($connection, $query);

		if ($query_run) 
		{
			$_SESSION['success'] = "About Us Added";
			header('Location: about.php');
		}
		else
		{
			$_SESSION['status'] = "About Us Not Added";
			header('Location: about.php');
		}
	}


	if (isset($_POST['team_save'])) 
	{
		$timages = $_FILES['team_image']['name'];
		$tname = mysqli_real_escape_string ($conection, $_POST['name']);
		$trole = mysqli_real_escape_string ($conection, $_POST['role']);
		$tbio = mysqli_real_escape_string ($conection, $_POST['bio']);

		$tbio = $connection->real_escape_string($tbio);

		if (file_exists('teamupload/' .$_FILES['team_image']['name']))
		 {

		 	$store = $_FILES['team_image']['name'];
		 	$_SESSION['status']= "Image already exists. '.$store.'";
		 	header('Location: about.php');
		 }
		 else
		 {
			$query = "INSERT INTO about_team (`images`, `name`, `role`, `bio`) VALUES ('$timages', '$tname', '$trole', '$tbio')";
			$query_run = mysqli_query($connection, $query);

			
			if ($query_run)
			 {
			 	move_uploaded_file($_FILES['team_image']['tmp_name'], 'teamupload/'.$_FILES['team_image']['name']); 
				$_SESSION['success'] = "Team Member Added";
				header('Location: about.php');
			}
			else
			{
				$_SESSION['status'] = "Team Member Not Added";
				header('Location: about.php');
			}

		}

	}



?>