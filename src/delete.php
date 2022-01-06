<?php
include('../backend/config.php');
$sql = "DELETE FROM 1951061139_university 
 WHERE magv='" . $_GET["magv"] . "'";
if (mysqli_query($conn, $sql)) {
    Header('location: http://localhost/CSE485_K61_KTGK_1951061139/');
} else {
    Header('location: http://localhost/CSE485_K61_KTGK_1951061139/error.php');
}
mysqli_close($conn);

?>