<!-- letakkan proses update data disini -->
<?php 

if(isset($_POST['update'])){
    
    //mengambil dat adari masing masing input
    $NIM=$_POST['NIM'];
    $Nama_karyawan=$_POST['Nama_karyawan'];
    $Alamat=$_POST['Alamat'];
    $Telp=$_POST['Telp'];

    // proses update
    $sql = "UPDATE pegawai SET Nama_karyawan='$Nama_karyawan',Alamat='$Alamat',Telp='$Telp' WHERE NIM='$NIM'";
    if ($conn->query($sql) === TRUE) {
        header("Location:?page=karyawan");
    }
}

//Memanggil data dan memasukkan ke masing masing input
$NIM=$_GET['NIM'];

$sql = "SELECT * FROM pegawai WHERE NIM='$NIM'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<div class="row">
    <div class="col-sm-12">
        <form action="" method="POST">
            <div class="card border-dark">
                <div class="card">
                    <div class="card-header bg-primary text-white border-dark"><strong>UPDATE DATA MAHASISWA</strong></div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="">NIM</label>
                                <input type="text" class="form-control" value="<?php echo $row["NIM"] ?>" name="NIM" readonly>
                            </div>
                             <div class="form-group">
                                <label for="">Nama Karyawan</label>
                                <input type="text" class="form-control" value="<?php echo $row["Nama_karyawan"] ?>" name="Nama_karyawan" maxlength="100" required>
                            </div>
                             <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" value="<?php echo $row["Alamat"] ?>" name="Alamat" maxlength="100" required>
                             </div>
                            <div class="form-group">
                                <label for="">No.Telpon</label>
                                <input type="text" class="form-control" value="<?php echo $row["Telp"] ?>" name="Telp" maxlength="15" required>
                             </div>
                                <input class="btn btn-primary" type="submit" name="update" value="Update">
                            <a class="btn btn-danger" href="?page=karyawan">Batal</a>

                </div>
            </div>
        </form>
    </div>
</div>