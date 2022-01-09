<?php

include "proje_baglantı.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($con,"delete from `table 1` where id = '$id'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:edit_galeri.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>