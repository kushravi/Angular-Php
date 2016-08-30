<?php
    include "../api/config.php";
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);

    $email = $request->email;
    $pswrd = MD5($request->pswrd);

    $sql = "SELECT email,password FROM tbl_user WHERE email = '$email' AND password = '$pswrd'";
    if(mysqli_query($conn,$sql)){
        echo json_encode(1);
    }
    else{
        echo json_encode(0);
    }
?>