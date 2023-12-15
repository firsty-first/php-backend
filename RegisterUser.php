<?php
require_once '../includes/DbOperations.php';
$response= array();
if($_SERVER ['REQUEST_METHOD']=="POST")
{
  if(isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]))
  { 
    $db=new DbOperations();
    if($db->createUser($_POST["username"],$_POST["password"],$_POST["email"]))
    {
     $response["error"]=false;
     $response["message"]="registered success";
  } 

  
  else
  {
    $response["error"]=true;
    $response["message"]="user not registered";

  }
    
  }
else{
  $response['error']=true;
      $response['message']= 'Invalid request';
}
}

