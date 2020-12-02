<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];
$nomorInvoice = $_GET['no'];
$namaPelanggan= $_GET['name'];
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM invoice WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:order.php?nomorInvoice=$nomorInvoice&name=$namaPelanggan");
?>
