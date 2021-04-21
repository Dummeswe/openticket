<?php echo  uniqid();?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>OpenTicket Remove ticket</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Open Ticket remove ticket</h2>
  <?php
  require_once('appvars.php');
    require_once('connectvars.php');
	//make sure we got something
	if (isset($_GET['id']) && isset($_GET['timestamp']) )
	{
		//GRab the data
		$id = $_GET['id'];
		$timestamp = $_GET['timestamp'];
		echo $id;
		echo '<br>';
		echo $timestamp;
		//we got the variable now lets go and get the quwey
		//delete from database
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
			//delete ticket from database
			$query = "DELETE FROM ticket WHERE id = $id LIMIT 1";
			mysqli_query($dbc,$query);
			mysqli_close($dbc);
			//confirm
			echo '<p>The ticket with id:' . $id . 'was removed </p>';
	}

	
	//DEletion

