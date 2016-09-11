<?php

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

class SQLConnection
{
	private $server = "localhost";
	private $user = "";
	private $password = "";
	private $DB_Name ="";
	private $tblName ="";
	
	public static function SQLConnect() 
	{
	$conn = new mysqli($server,$user,$password);
	
	if($conn -> connect_error)
		{
			die("Connection Failed: " . $conn ->connect_error);
		}
	echo "Connection Successful";
	}	
	
	public static function SQLClose(){$conn -> close(); return NULL;}
}
	

		
?>