<div class="card">
  <div class="card-header bg-primary text-white border-dark"><strong>DATA KRITERIA</strong></div>
  <div class="card-body">
<a class="btn btn-primary mb-2" href="?page=kriteria&action=tambah">Tambah</a>
<table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th widht="50px">Kode</th>
        <th widht="200px">Nama Kriteria</th>
        <th widht="300px">Bobot</th>
        <th widht="80px">Tipe</th>
        <th widht="1000px"></th>
      </tr>
    </thead>
    <tbody>
    <?php
     $sql = "SELECT*FROM kriteria ORDER BY Kode_kriteria ASC";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()) {
    ?>
    <tr>
            <td><?php echo $row['Kode_kriteria']; ?></td>
            <td><?php echo $row['Nama_kriteria']; ?></td>
            <td><?php echo $row['Bobot_kriteria']; ?></td>
            <td><?php echo $row['Tipe_kriteria']; ?></td>
            <td align="center">
            <a class="btn btn-warning" href="?page=kriteria&action=update&Kode_kriteria=<?php echo $row['Kode_kriteria']; ?>">
                <span class="far fa-edit" widht="20px" weight="20px"></span>
                 </a>
                     <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=kriteria&action=hapus&Kode_kriteria=<?php echo $row['Kode_kriteria']; ?>">
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