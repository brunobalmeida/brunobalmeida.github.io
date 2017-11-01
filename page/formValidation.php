<?php

	//Functions to validate entries of contact.html
	$errorMessage = "";
	//Server side check for names entries

	function ValidateFirstName ($firstName){
		global $errorMessage;
		if ( strlen($firstName)<2 || $firstName == "" || is_numeric($firstName))
		{
			$errorMessage = "Invalid First name<br>";
			echo $errorMessage;
		}
	}
	
	function ValidateLasttName ($lastName){
		global $errorMessage;
		if ( strlen($lastName)<2 || $lastName == "" || is_numeric($lastName))
		{
			$errorMessage = "Invalid Last name<br>";
			echo $errorMessage;
		}
	}
	
	//NEED TO CHECK THIS FUNCTION
	function ValidateEmail ($email){
		global $errorMessage;
		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
		  $errorMessage = "Invalid email format<br>"; 
		}
	}

		function ValidateMessage ($message){
		global $errorMessage;
		if ( strlen($message)<2 || $message == "")
		{
			$errorMessage = "Invalid Message<br>";
			echo $errorMessage;
		}
	}

	
	//Check if all the information of Contact is valid
	function ValidateContact ($contactInfo){
		global $errorMessage;
		$errorMessage = "";
		ValidateFirstName($contactInfo["firstName"]);
		ValidateLasttName($contactInfo["lastName"]);
		//ValidateEmail($contactInfo["email"]);
		ValidateMessage($contactInfo["message"]);
		
		if ($errorMessage ==""){
			return true;
		}else{
			return false;
		}	
	}
	
?>
