<?php

    require 'conn.php';

    $sql="DELETE FROM CUSTOMER";
    $result = mysqli_query( $conn, $sql );
    echo mysqli_error($conn);
?>
