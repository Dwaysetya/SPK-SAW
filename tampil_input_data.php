<div class="card">
  <div class="card-header bg-primary text-white border-dark"><strong>INPUT DATA</strong></div>
  <div class="card-body">
<a class="btn btn-primary mb-2" href="?page=input_data&action=tambah">Tambah</a>
<table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th widht="50px">No</th>
        <th widht="50px">Tahun</th>
        <th widht="100px">NIM</th>
        <th widht="100px">Nama</th>
        <th widht="80px">Kedisiplinan</th>
        <th widht="80px">kejujuran</th>
        <th widht="80px">Loyalitas</th>
        <th widht="80px">K.sama</th>
        <th widht="80px">T.Jawab</th>
        <th widht="80px">K.Pemimpin</th>
        <th widht="80px"></th>
      </tr>
    </thead>
    <tbody>
    <?php
    $i=1;
     $sql = "SELECT pendaftaran.Id_daftar,
                    pendaftaran.Tahun,
                    pendaftaran.NIM,
                    pegawai.Nama_karyawan,
                    pendaftaran.Kedisiplinan,
                    pendaftaran.Kejujuran,
                    pendaftaran.Loyalitas,
                    pendaftaran.Kerjasama_team,
                    pendaftaran.Tanggung_jawab,
                    pendaftaran.Kepemimpinan 
            FROM pegawai INNER JOIN pendaftaran ON pegawai.NIM=pendaftaran.NIM ORDER BY Id_daftar DESC";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()) {
    ?>
    <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['Tahun']; ?></td>
            <td><?php echo $row['NIM']; ?></td>
            <td><?php echo $row['Nama_karyawan']; ?></td>
            <td><?php echo $row['Kedisiplinan']; ?></td>
            <td><?php echo $row['Kejujuran']; ?></td>
            <td><?php echo $row['Loyalitas']; ?></td>
            <td><?php echo $row['Kerjasama_team']; ?></td>
            <td><?php echo $row['Tanggung_jawab']; ?></td>
            <td><?php echo $row['Kepemimpinan']; ?></td>
            <td align="center">
            <a class="btn btn-warning" href="?page=input_data&action=update&Id_daftar=<?php echo $row['Id_daftar']; ?>">
                <span class="far fa-edit">edit</span>
                 </a>
                     <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=input_data&action=hapus&Id_daftar=<?php echo $row['Id_daftar']; ?>">
                     <span class="fas fa-trash"></span>
                 </a>
                    </td>
    </tr>
    <?php
         }
        $conn->close();
     ?>
   </tbody>
</table>
</div>
</div> 