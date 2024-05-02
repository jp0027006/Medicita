<?php
include "databaseconn.php";

$sql = "UPDATE appointment SET appointment_type='".$_POST['appointment_type']."', dieseas='".$_POST['dieseas']."', appointment_time='".$_POST['appointment_time']."' WHERE appointment_id = '".$_POST['appointment_id']."'";
$exe = mysqli_query($conn, $sql);
if ($exe)
{
    echo true;
}
else
{
    echo false;
}
?>