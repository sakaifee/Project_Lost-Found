<?php
$insert = false;
if (isset($_POST['Name'])) {
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("connection to this database failed due to" . mysqli_connect_error());
}

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Others = $_POST['Others'];
// echo "Success connecting to db";
$sql = "INSERT INTO `lost_found`.`webapps` (`Name`, `Email`, `Phone`, `Others`, `Dt`) VALUES ('$Name', '$Email', '$Phone', '$Others', current_timestamp());";

// echo $sql;

//object operator
if ($con->query($sql) == true) {
    // echo "Successfullly inserted";
    $insert = true;
} else {
    echo "ERROR: $sql <br> $con->error";
}

$con->close();
}
?>
