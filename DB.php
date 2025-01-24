<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "test_DB";


try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

}
catch(exception) {
    echo "Could not connect!";
}

if ($conn) {
    // echo "You are connected! . <br>";
}


?>