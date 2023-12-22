<!-- letakkan proses tambah data disini -->
<?php

if(isset($_POST['simpan'])){

    //ambil data
    $Nama=$_POST['Nama'];
    $Tahun=$_POST['Tahun'];
    $Kedisiplinan=$_POST['Kedisiplinan'];
    $Kejujuran=$_POST['Kejujuran'];
    $Loyalitas=$_POST['Loyalitas'];
    $Kerjasama_team=$_POST['Kerjasama_team'];
    $Tanggung_jawab=$_POST['Tanggung_jawab'];
    $Kepemimpinan=$_POST['Kepemimpinan'];
	
    // validasi data karyawan
    $sql = "SELECT*FROM pendaftaran WHERE Tahun='$Tahun' AND NIM='$Nama'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>DATA SUDAH ADA</strong>
            </div>
        <?php
    }else{
	//proses simpan data Penddaftaran
        $sql = "INSERT INTO pendaftaran VALUES ('','$Tahun','$Nama','$Kedisiplinan','$Kejujuran','$Loyalitas','$Kerjasama_team','$Tanggung_jawab','$Kepemimpinan')";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=input_data");
        }
    }
}
?> 
<div class="row">
    <div class="col-sm-12">
            <form action="" method="POST">
                <div class="card border-dark">
                    <div class="card">
                        <div class="card-header bg-primary text-white border-dark"><strong>INPUT DATA PENDAFTARAN</strong></div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="">Tahun</label>
                                    <select class="form-control chosen" data-placeholder="Pilih Tahun" name="Tahun">
                                        <option value=""></option>
                                        <?php
                                            for ($x=date("Y");$x>=2022;$x--){
                                        ?>
                                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                <label for="">Nama Karyawan</label>
                                <select class="form-control chosen" data-placeholder=" Pilih Karyawan" name="Nama">
                                    <option value=""></option>
                                    <?php
                                        $sql = "SELECT * FROM pegawai ORDER BY Nama_karyawan ASC";
                                        $result = $conn->query($sql);
                                        while($row = $result->fetch_assoc()) {
                                    ?>
                                        <option value="<?php echo $row['NIM']; ?>"><?php echo $row['NIM'] ."-". $row['Nama_karyawan']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                </div>
                                <div class="form-group">
                                <label for="">Kedisiplinan</label>
                                <input type="number" class="form-control" name="Kedisiplinan" min="1" max="10" required>
                                </div>
                                <div class="form-group">
                                <label for="">Kejujuran</label>
                                <input type="number" class="form-control" name="Kejujuran" min="1" max="10" required>
                                </div>
                                <div class="form-group">
                                <label for="">Loyalitas</label>
                                <input type="number" class="form-control" name="Loyalitas" min="1" max="10" required>
                                </div>
                                <div class="form-group">
                                <label for="">Kerjasama_team</label>
                                <input type="number" class="form-control" name="Kerjasama_team" min="1" max="10" required>
                                </div>
                                <div class="form-group">
                                <label for="">Tanggung_jawab</label>
                                <input type="number" class="form-control" name="Tanggung_jawab" min="1" max="10" required>
                                </div>
                                <div class="form-group">
                                <label for="">Kepemimpinan</label>
                                <input type="number" class="form-control" name="Kepemimpinan" min="1" max="10" required>
                                </div>

                                <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                                <a class="btn btn-danger" href="?page=input_data">Batal</a>

                </div>
            </div>
        </form>
    </div>
</div>