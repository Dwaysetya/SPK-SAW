<!-- letakkan proses tambah data disini -->
<?php

if(isset($_POST['simpan'])){

    //ambil data
    $Kode_kriteria=$_POST['Kode_kriteria'];
    $Nama_kriteria=$_POST['Nama_kriteria'];
    $Bobot_kriteria=$_POST['Bobot_kriteria'];
    $Tipe_kriteria=$_POST['Tipe_kriteria'];
	
// validasi data kriteria
 $sql = "SELECT*FROM kriteria WHERE Kode_kriteria='$Kode_kriteria'";
 $result = $conn->query($sql);
    if ($result->num_rows > 0) {
 ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Kriteria Sudah Ada</strong>
            </div>
        <?php
    }else{
	//proses simpan data kriteria
        $sql = "INSERT INTO kriteria VALUES ('$Kode_kriteria','$Nama_kriteria','$Bobot_kriteria','$Tipe_kriteria')";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=kriteria");
        }
    }
}
?> 
<div class="row">
    <div class="col-sm-12">
            <form action="" method="POST">
                <div class="card border-dark">
                    <div class="card">
                        <div class="card-header bg-primary text-white border-dark"><strong>TAMBAH KRITERIA</strong></div>
                            <div class="card-body">

                                <div class="form-group">
                                <label for="">Kode</label>
                                <select class="form-control chosen" data-placeholder="Kode_kriteria" name="Kode_kriteria">
                                    <option value="C1">C1</option>
                                    <option value="C2">C2</option>
                                    <option value="C3">C3</option>
                                    <option value="C4">C4</option>
                                    <option value="C5">C5</option>
                                </select>
                                </div>
                                <div class="form-group">
                                <label for="">Nama Kriteria</label>
                                <input type="text" class="form-control" name="Nama_kriteria" maxlength="15" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Bobot</label>
                                    <select class="form-control chosen" data-placeholder="10-100" name="Bobot_kriteria">
                                        <option value=""></option>
                                        <?php
                                            for ($i = 10; $i <= 100; $i=$i+5) {
                                            echo $i;
                                            echo "<br>";
                                        ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="">Tipe</label>
                                <select class="form-control chosen" data-placeholder="Benefit-Cost" name="Tipe_kriteria">
                                        <option value=""></option>
                                        <option value="Benefit">Benefit</option>
                                        <option value="Cost">Cost</option>
                                </select>
                                </div>

                                <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                                <a class="btn btn-danger" href="?page=kriteria">Batal</a>

                </div>
            </div>
        </form>
    </div>
</div>