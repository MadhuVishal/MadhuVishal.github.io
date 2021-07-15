<?php

    require 'conn.php';

    $p1=$_POST['n1'];
    $p2=$_POST['n2'];
    $p3=$_POST['n3'];
    $p4=$_POST['n4'];
    $p5=$_POST['n5'];
    $p6=$_POST['n6'];
    $p7=$_POST['n7'];
    $p8=$_POST['n8'];
    $p9=$_POST['n9'];
    $p10=$_POST['n10'];

    $sql="INSERT INTO order_details VALUES ('$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p9','$p9','$p10')";
    $result = mysqli_query( $conn, $sql );

    echo mysqli_error($conn);
    // echo $p1.$p2.$p3.$p4;
    if($result) echo "we have recieved your orders";
    
?>