<?php
	// deleteimageprocess.php for Aeroapps Admin Portal
	
	// Set up db connection
	include('connect/local-connect.php');
	
	// PHP variables for the HTML elements
	$id = $_POST['tempDeleteID'];
	
	// Build the delete question query
	$query = "DELETE FROM images WHERE id = '$id'";
	
	// Run the delete question query
	$result = mysql_query($query) or die('Image read error!'); 
	
	// Close the db connection
	mysql_close($dbc);
	
	// start a PHP session
	session_name('logged');
	session_start('logged');
	
	// Redirect back to Questions.php
	header('Location: images.php');
	exit;
?>