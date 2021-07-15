<?php

    require 'conn.php';

    $sql="SELECT * FROM CUSTOMER";
    $result = mysqli_query( $conn, $sql );
    $nt=mysqli_fetch_array($result);
    echo $nt['full_name'];
    echo $nt['email'];
    echo mysqli_error($conn);
    
?>