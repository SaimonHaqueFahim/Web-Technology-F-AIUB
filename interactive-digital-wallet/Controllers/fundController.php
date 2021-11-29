<?php
	require_once 'models/db_config.php';
	$err_db="";
	
	//validation variables
	if(isset($_POST["add_fund"])){
		//do validations
		//if no error
		$rs = insertCategory($_POST["from"],$_POST["to"],$_POST["amount"]);
		if($rs === true){
			header("Location: alltransaction.php");
		}
		$err_db = $rs;
		
	}

	
	function insertCategory($from,$to,$amount){
		$query="insert into transactions values (NULL,'$from','$to','$amount')";
		return execute($query);
	}
	
	function getAllTransactions(){
		$query = "select * from transactions";
		$rs = get($query);
		return $rs;
	}

?>