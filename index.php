<?php
date_default_timezone_set("Asia/Jakarta");
require "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPK PENILAIAN KARYAWAN TERBAIK</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap-chosen.css">
</head>
<body>

<!-- Tampilan Menu -->
<nav class="navbar navbar-dark bg-primary border navbar-expand-sm fixed-top">
    <a class="navbar-brand" href="#">SPK-SAW</a>
    <ul class="navbar-nav">
        <li class="nav-item active"><a class="nav-link" href="index.php"><i class="fas fa-home"></i> HOME </a></li>
        <li class="nav-item active"><a class="nav-link" href="?page=karyawan"><i class="fas fa-user-tie"></i> DATA KARYAWAN </a></li>
        <li class="nav-item active"><a class="nav-link" href="?page=kriteria"><i class="fas fa-circle-nodes"></i> KRITERIA </a></li>
        <li class="nav-item active"><a class="nav-link" href="?page=input_data"><i class="fas fa-address-book"></i> INPUT DATA </a></li>
        <li class="nav-item active"><a class="nav-link" href="?page=perangkingan"><i class="fas fa-graduation-cap"></i> PERANGKINGAN </a></li>
        <li class="nav-item active"><a class="nav-link" href="?page="><i class="fas fa-door-closed"></i> LOG-OUT </a></li>
    </ul>
</nav>

<div class="container" style="margin-top:100px;margin-bottom:100px">
    <?php

        // pengaturan menu
        $page = isset($_GET['page']) ? $_GET['page'] : "";
        $action = isset($_GET['action']) ? $_GET['action'] : "";

        if ($page==""){
            include "welcome.php";
        }elseif ($page=="karyawan"){
            if ($action==""){
                include "tampil_datakaryawan.php";
            }elseif($action=="tambah"){
                include "tambah_karyawan.php";
            }elseif($action=="update"){
                include "update_karyawan.php";
            }else{
                include "hapus_datakaryawan.php";
            }
        } elseif ($page=="kriteria"){
                if ($action==""){
                    include "tampil_kriteria.php";
                }elseif($action=="tambah"){
                    include "tambah_kriteria.php";
                }elseif($action=="update"){
                    include "update_karyawan.php";
                }else{
                    include "hapus_datakaryawan.php";
                }
        }elseif ($page=="input_data"){
            if ($action==""){
                include "tampil_input_data.php";
            }elseif($action=="tambah"){
                include "tambah_pendaftaran.php";
            }elseif($action=="update"){
                include "update_pendaftaran.php";
            }else{
                include "hapus_pendaftaran.php";
            }
        }elseif ($page=="perangkingan"){
            if ($action==""){
                 include "perangkingan.php";
             }
        }else{
          
        }
    ?>
</div>

    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/all.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script>
       $(document).ready(function () {
           $('#myTable').dataTable();
       });
    </script>

    <script src="assets/js/chosen.jquery.min.js"></script>
    <script>
     $(function() {
       $('.chosen').chosen();
     });
    </script>

</body>
</html>