<?php
include "db-connect.php";
$id = $_GET["id"];
$sql = "DELETE FROM `users` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: admin-index.php?msg=Data deleted successfully");
} else {
    echo "Failed: " . mysqli_error($conn);
}