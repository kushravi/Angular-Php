<?php
	include "../api/config.php";
	$postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $name = $request->name;
    $email = $request->email;
    $pswrd = MD5($request->pswrd);

    $sql ="INSERT INTO tbl_user(name,email,password) VALUES ('$name','$email','$pswrd');";
    if(mysqli_query($conn,$sql) === TRUE){
    	echo json_encode(1);
    }
    else{
    	echo json_encode(0);
    }
    
?>