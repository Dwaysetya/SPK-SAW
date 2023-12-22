<div class="card">
  <div class="card-header bg-primary text-white border-dark"><strong>DATA KARYAWAN</strong></div>
  <div class="card-body">
<a class="btn btn-primary mb-2" href="?page=karyawan&action=tambah">Tambah</a>
<table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th widht="50px">NIM</th>
        <th widht="200px">Nama Karyawan</th>
        <th widht="300px">Alamat</th>
        <th widht="80px">No. Telp</th>
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
            <td align="center">
            <a class="btn btn-warning" href="?page=karyawan&action=update&NIM=<?php echo $row['NIM']; ?>">
                <span class="far fa-edit" widht="20px" weight="20px"></span>
                 </a>
                     <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=karyawan&action=hapus&NIM=<?php echo $row['NIM']; ?>">
                     <span class="fas fa-trash" widht="20px" weight="20px"></span>
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