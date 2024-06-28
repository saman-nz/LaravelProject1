<?php


function InitDB (){
	$Srv = "localhost";
	$Usr = "root";
	$Pass = "";
	$Db = "soldcoupon";
	
	$conn = new mysqli($Srv, $Usr, $Pass, $Db);
	
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	return $conn;
	//echo "Connected successfully";
}


function GetStore($Store){
	$Conn = InitDB();
	if ($Store=="All"){
		$sql = "SELECT * FROM store";		
	}
	else{
		$sql = "SELECT * FROM store WHERE store_name LIKE '". $Store . "%'";			
		
	}

	$result = $Conn->query($sql);
	
	if ($result->num_rows > 0) {
		return $result;
	/*
	  while($row = $result->fetch_assoc()) {
		echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	  }*/
	  
	} 
	else {
	  return 0;
	}
	$conn->close();
	
}// function end

function GetStoreByID($Id){
	$Conn = InitDB();
	
	$sql = "SELECT * FROM store WHERE id ='".  $Id . "' ";
	$result = $Conn->query($sql);
	
	if ($result->num_rows > 0) {
		return $result;
	} 
	else {
	  return 0;
	}
	$conn->close();
	
}// function end

function GetCouponBySId($StoreId){
	$Conn = InitDB();
	
	$sql = "SELECT * FROM coupon WHERE store_id ='".  $StoreId . "' ";
	$result = $Conn->query($sql);
	
	if ($result->num_rows > 0) {
		return $result;
	} 
	else {
	  return 0;
	}
	$conn->close();
	
}// function end



?>