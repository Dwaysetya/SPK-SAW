<?php

$Id_daftar=$_GET['Id_daftar'];

$sql = "DELETE FROM pendaftaran WHERE Id_daftar='$Id_daftar'";
if ($conn->query($sql) === TRUE) {
    header("Location:?page=input_data");
}
$conn->close();
?>