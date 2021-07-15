<?php

    require 'conn.php';

    // echo "hi";
    $v1 = $_POST["full_name"];
    $p2 = $_POST["email"];
    $p3 = $_POST["phone_no"];
    $p4 = $_POST["message"];

    echo $p1.$p2.$p3.$p4;

    $sql="INSERT INTO customer VALUES ('$v1','$p2','$p3','$p4')";
    $result = mysqli_query( $conn, $sql );

    echo mysqli_error($conn);
    echo $p1.$p2.$p3.$p4;
    
?>