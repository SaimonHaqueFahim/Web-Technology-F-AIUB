<?php
require_once 'Models/db_config.php';
$name="";
$catnameErr="";

$phone="";
$catpnErr=""; 

$err_db="";
$hasError="";

if(isset($_POST["add_benificiary"])){

if(empty($_POST["name"]))

{
  
  $hasError=true;
  $catnameErr="&nbsp;&nbsp;*Name Required";
 
}
elseif (strlen($_POST["name"]) <2){
  $hasError = true;
  $catnameErr = "&nbsp;&nbsp;*Name must be greater than 1 characters";
}

else
{
  $name = $_POST["name"];
}

if(empty($_POST["phone"]))

{
  
  $hasError=true;
  $catpnErr="&nbsp;&nbsp;*phone Required";
 
}

if (strlen($_POST["phone"]) <2){
    $hasError = true;
    $catpnErr = "&nbsp;&nbsp;*phone must be greater than 1 characters";
  }
  
  else
  {
    $name = $_POST["phone"];
  }
  

if(!$hasError){
  $rs=insertCategory($name,$phone);
  if ($rs === true) {
    header("Location: allBenificiary.php");
  }
  $err_db = $rs;
  }



}



function getAllCategories(){
  $query="select * from benificiary";
  $rs=get($query);
  return $rs;
}

function insertCategory($name,$phone){
  $query="insert into benificiary values (NULL,'$name','$phone')";
  return execute($query);

}


 ?>
