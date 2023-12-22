<!-- letakkan proses update data disini -->
<?php 
//Memanggil data dan memasukkan ke masing masing input
$Id_daftar=$_GET['Id_daftar'];

if(isset($_POST['update'])){
    
    //mengambil dat adari masing masing input
    $Kedisiplinan=$_POST['Kedisiplinan'];
    $Kejujuran=$_POST['Kejujuran'];
    $Loyalitas=$_POST['Loyalitas'];
    $Kerjasama_team=$_POST['Kerjasama_team'];
    $Tanggung_jawab=$_POST['Tanggung_jawab'];
    $Kepemimpinan=$_POST['Kepemimpinan'];

    // proses update
    $sql = "UPDATE pendaftaran SET Kedisiplinan='$Kedisiplinan',Kejujuran='$Kejujuran',Loyalitas='$Loyalitas',Kerjasama_team='$Kerjasama_team',Tanggung_jawab='$Tanggung_jawab',Kepemimpinan='$Kepemimpinan' WHERE Id_daftar='$Id_daftar'";
    if ($conn->query($sql) === TRUE) {
        header("Location:?page=input_data");
    }
}

$sql = "SELECT  pendaftaran.Id_daftar,
                pendaftaran.Tahun,
                pendaftaran.NIM,
                pegawai.Nama_karyawan,
                pendaftaran.Kedisiplinan,
                pendaftaran.Kejujuran,
                pendaftaran.Loyalitas,
                pendaftaran.Kerjasama_team,
                pendaftaran.Tanggung_jawab,
                pendaftaran.Kepemimpinan 
        FROM pegawai INNER JOIN pendaftaran ON pegawai.NIM=pendaftaran.NIM WHERE Id_daftar='$Id_daftar'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<div class="row">
    <div class="col-sm-12">
        <form action="" method="POST">
            <div class="card border-dark">
                <div class="card">
                    <div class="card-header bg-primary text-white border-dark"><strong>UPDATE DATA PENDAFTARAN</strong></div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Tahun</label>
                                <input type="text" class="form-control" name="Tahun" value="<?php echo $row["Tahun"] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">NIM</label>
                                <input type="text" class="form-control" name="NIM" value="<?php echo $row["NIM"] ?>" readonly>
                            </div>
                             <div class="form-group">
                                <label for="">Nama Karyawan</label>
                                <input type="text" class="form-control" name="Nama_karyawan" value="<?php echo $row["Nama_karyawan"] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Kedisiplinan</label>
                                <input type="number" class="form-control" name="Kedisiplinan" value="<?php echo $row["Kedisiplinan"] ?>" min="1" max="10" required>
                             </div>
                            <div class="form-group">
                                <label for="">Kejujuran</label>
                                <input type="number" class="form-control" name="Kejujuran" value="<?php echo $row["Kejujuran"] ?>" min="1" max="10" required>
                             </div>
                             <div class="form-group">
                                <label for="">Loyalitas</label>
                                <input type="number" class="form-control" name="Loyalitas" value="<?php echo $row["Loyalitas"] ?>" min="1" max="10" required>
                             </div>
                                <div class="form-group">
                                <label for="">Kerjasama_team</label>
                                <input type="number" class="form-control" name="Kerjasama_team" value="<?php echo $row["Kerjasama_team"] ?>" min="1" max="10" required>
                            </div>
                             <div class="form-group">
                                <label for="">Tanggung_jawab</label>
                                <input type="number" class="form-control" name="Tanggung_jawab" value="<?php echo $row["Tanggung_jawab"] ?>" min="1" max="10" required>
                             </div>
                             <div class="form-group">
                                <label for="">Kepemimpinan</label>
                                <input type="number" class="form-control" name="Kepemimpinan" value="<?php echo $row["Kepemimpinan"] ?>" min="1" max="10" required>
                            </div>
                                <input class="btn btn-primary" type="submit" name="update" value="Update">
                                <a class="btn btn-danger" href="?page=input_data">Batal</a>

                </div>
            </div>
        </form>
    </div>
</div>