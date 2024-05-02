<?php
include "databaseconn.php";

$sql = "select * from doc_speciality";
$exe = mysqli_query($conn,$sql);
$result = mysqli_fetch_assoc($exe);
if ($result)
{
    echo json_encode($result);
}
else
{
    echo "false";
}
?>