<?php

require './php_scripts/conn.php';

session_start();



$f1=$_POST["f1"];
$f2=$_POST["f2"];

    $sql = "SELECT a_name from admin_login WHERE a_email = '$f1'  AND a_password = '$f2' OR a_username = '$f1'  AND a_password = '$f2'";
    $result = mysqli_query( $conn, $sql );
    
    if($result){
    if(mysqli_num_rows($result)>0){
        $nt=mysqli_fetch_array($result);
        $_SESSION["adm"] = $nt['a_name'];
    header("Location: ./selection.php"); 
    // echo "success";

    }
    
    else  echo "Access invalid";
        
    }        
?>