<?php

    require 'conn.php';

    $sql="DELETE FROM ORDER_DETAILS";
    $result = mysqli_query( $conn, $sql );
    echo mysqli_error($conn);
?>
