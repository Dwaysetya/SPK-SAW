<!-- letakkan proses tambah data disini -->
<?php

if(isset($_POST['simpan'])){

    //ambil data
    $NIM=$_POST['NIM'];
    $Nama_karyawan=$_POST['Nama_karyawan'];
    $Alamat=$_POST['Alamat'];
    $Telp=$_POST['Telp'];
	
    // validasi data karyawan
    $sql = "SELECT*FROM pegawai WHERE NIM='$NIM'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>NIM Sudah Digunakan</strong>
            </div>
        <?php
    }else{
	//proses simpan data karyawan
        $sql = "INSERT INTO pegawai VALUES ('$NIM','$Nama_karyawan','$Alamat','$Telp')";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=karyawan");
        }
    }
}
?> 
<div class="row">
    <div class="col-sm-12">
            <form action="" method="POST">
                <div class="card border-dark">
                    <div class="card">
                        <div class="card-header bg-primary text-white border-dark"><strong>INPUT DATA KARYAWAN</strong></div>
                            <div class="card-body">
                                <div class="form-group">
                                <label for="">NIM</label>
                                <input type="text" class="form-control" name="NIM" maxlength="10" required>
                                </div>
                                <div class="form-group">
                                <label for="">Nama Karyawan</label>
                                <input type="text" class="form-control" name="Nama_karyawan" maxlength="100" required>
                                </div>
                                <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control" name="Alamat" maxlength="100" required>
                                </div>
                                <div class="form-group">
                                <label for="">No.Telpon</label>
                                <input type="text" class="form-control" name="Telp" maxlength="15" required>
                                </div>

                                <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                                <a class="btn btn-danger" href="?page=karyawan">Batal</a>

                </div>
            </div>
        </form>
    </div>
</div>