<?php
	// Check to see values have been set in the $_post global array for the
	// entryTitle entryText keys
	$email = $_POST['email'];
	$forename = $_POST['forename'];
	$surname = $_POST['surname'];

	// IF values set
	if(!empty($email) && !empty($forename) && !empty($surname)){

		// Connect to database server
		mysql_connect("devweb2014.cis.strath.ac.uk", "wlb12153", "ingeduel");
		echo "Connected to MySQL<br/>";

		// Select your database
		mysql_select_db("wlb12153") or die(mysql_error());
		echo "Connected to Database<br/>";

		// Build an SQL query to add the new entry into the registration table
		$QUERY = "INSERT INTO registration (email, surname, forename) 
		VALUES ('$email', '$surname', '$forename')";
		// Execute the query
		mysql_query($QUERY) or die(mysql_error());
		echo "Entry added.";
		// Redirect to index.php
		header("Location: https://devweb2014.cis.strath.ac.uk/~wlb12153/WAD/practicals/prac4/registered.php");
	
	} 
	else {
		// ELSE values not set

		// Print out an error message "Form not filled in correctly..." and
		// provide a link back to addEntry.html
		echo "Form not filled in correctly.<br/>";
		echo '<a href=https://devweb2014.cis.strath.ac.uk/~wlb12153/WAD/practicals/prac2/Registration.html>Try again.</a>';

	}
?>