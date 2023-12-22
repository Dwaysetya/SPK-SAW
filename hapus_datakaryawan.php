<?php

$NIM=$_GET['NIM'];

$sql = "DELETE FROM pegawai WHERE NIM='$NIM'";
if ($conn->query($sql) === TRUE) {
    header("Location:?page=karyawan");
}
$conn->close();
?>