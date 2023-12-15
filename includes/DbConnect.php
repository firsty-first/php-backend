<?php
 class DbConnect{
	private $con;
	public function __construct(){
	}
	
		
 
 function connect()
 {
	 
	 include_once dirname(__FILE__).'/constants.php';
	 $this->con =new mysqli(DB_HOST,DB_USER, DB_PASSWORD,DB_NAME);
	 if(mysqli_connect_errno()){
		 echo "Failied to connect with database";
	 }
	 return $this->con;
 }
 }