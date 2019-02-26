<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>homepage contact form </title>
<link href="subpage.css" rel="stylesheet" type="text/css">
<!--
    Author: Faith Mauk
	Date: December 1 2017.
-->
<meta charset="utf-8">
<meta charset="UTF-8">
<meta name="description" content="Coffee Tree Website newsletter response">
<meta name="keywords" content="coffee, coffee tree, food, fun, trivia, events, chess, concerts, theater, newsletter, contact">
<meta name="author" content="Faith Mauk">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


	
	<main>
		<a href = "http://www.faithmauk.com">return to main site</a>	

<p>&nbsp;</p>

<?php



//This code pulls the field name and value attributes from the Post file
//The Post file was created by the form page when it gathered all the name value pairs from the form.
//It is building a string of data that will become the body of the email

//          CHANGE THE FOLLOWING INFORMATION TO SEND EMAIL FOR YOU //  

	$toEmail = "frmauk@dmacc.edu";		//CHANGE within the quotes. Place email address where you wish to send the form data. 
										//Use your DMACC email address for testing. 
										//Example: $toEmail = "jhgullion@dmacc.edu";		
	
	$subject = "homepage contact submission";	//CHANGE within the quotes. Place your own message.  For the assignment use "WDV101 Email Example" 

	$fromEmail = "faith.mauk@faithmauk.com";		//CHANGE within the quotes.  Use your DMACC email address for testing OR
										//use your domain email address if you have Heartland-Webhosting as your provider.
										//Example:  $fromEmail = "contact@jhgullion.org";  

//   DO NOT CHANGE THE FOLLOWING LINES  //

	$emailBody = "Form Data\n\n ";			//stores the content of the email
	foreach($_POST as $key => $value)		//Reads through all the name-value pairs. 	$key: field name   $value: value from the form									
	{
		$emailBody.= $key."=".$value."\n";	//Adds the name value pairs to the body of the email, each one on their own line
	} 
	
	$headers = "From: $fromEmail" . "\r\n";				//Creates the From header with the appropriate address

 	if (mail($toEmail,$subject,$emailBody,$headers)) 	//puts pieces together and sends the email to your hosting account's smtp (email) server
	{
   		echo("<h3>Message successfully sent!</h3>");
  	} 
	else 
	{
   		echo("<p>Message delivery failed...</p>");
  	}

?>
		</main>
</body>
</html>
