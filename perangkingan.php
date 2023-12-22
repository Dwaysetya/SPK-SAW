<div class="card">
  <div class="card-header bg-primary text-white border-dark"><strong>PERANGKINGAN</strong></div>
  <div class="card-body">
<a class="btn btn-primary mb-2" href="?page=karyawan&action=tambah">Tambah</a>
<table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th widht="50px">NO.</th>
        <th widht="50px">NIM</th>
        <th widht="200px">Nama Karyawan</th>
        <th widht="300px">N_Kedisiplinan</th>
        <th widht="300px">N_Kejujuran</th>
        <th widht="300px">N_Loyalitas</th>
        <th widht="300px">N_Kerjasamateam</th>
        <th widht="300px">N_Tanggungjawab</th>
        <th widht="300px">N_Kepemimpinan</th>
        <th widht="300px">Pereferensi</th>
        <th widht="1000px"></th>
      </tr>
    </thead>
    <tbody>
    <?php
     $sql = "SELECT*FROM pegawai ORDER BY NIM ASC";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()) {
    ?>
    <tr>
            <td><?php echo $row['NIM']; ?></td>
            <td><?php echo $row['Nama_karyawan']; ?></td>
            <td><?php echo $row['Alamat']; ?></td>
            <td><?php echo $row['Telp']; ?></td>
    </tr>
    <?php
         }
        $conn->close();
     ?>
   </tbody>
</table>
</div>
</div> 