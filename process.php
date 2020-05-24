<?php
 
	if(isset($_POST['btn-send']))
	{
	   $UserName = $_POST['username'];
	   $Email = $_POST['email'];
	   $Number = $_POST['mobile'];
	   $Msg = $_POST['msg'];

	   if(empty($UserName) || empty($Email) || empty($Number) || empty($Msg))
	   {
	   	header('location:index.php?error');
	   }

	   else
	   {
	   	$to = "bipintiwari234@gmail.com";

	   	if(mail($to,$UserName,$Email,$Number,$Msg))
	   	{
	   		header("location:index.php?success");
	   	}
	   }
	}
	else 
	{
		header("location:index.php");
	}

?>