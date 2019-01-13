<div class="main">
  <div class="container">
  <div class="row">
  <a href="#" class="btn btn-success" id="tambah">Tambah</a>
   <a href="?rute=hitung" class="btn btn-primary" id="">Hitung Bobot</a>
    <a href="?rute=home" class="btn btn-danger" id="">Detail</a>
<table class="table table-striped table-hover ">
<thead>
    <tr>
      <th>Id</th>
      <th>Judul</th>
      <th>Dokumen</th>
    </tr>
  </thead>
<?php
$result = mysqli_query($konek,"SELECT * FROM tbberita ORDER BY Id");
	while($row = mysqli_fetch_array($result)) {
		echo '<tbody>
    	<tr class="active">';
    	echo '<td>'.$row['Id'].'</td>';
	    echo '<td>'.$row['Judul'].'</td>';
	    echo '<td>'.$row['Berita'].'</td>';
	    // echo '<td><a class="btn btn-primary" href="hapus.php?kode='.$row['Id'].'">Edit</a>';
	    echo '<td><a class="btn btn-danger" href="hapus.php?kode='.$row['Id'].'">Hapus</a>';
		// echo $row['Id'] . ". <font color =blue>" . $row['Judul'] . "</font><br />" . $row['Berita'];
		// echo "<hr />";
		echo '</tr>';
	}
	
?>
</table>
<script type="text/javascript">
$('#tambah').click(function(){
$('#myModal').modal('show'); 
});
 </script>
 
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Masukan Dokumen</h4>
        </div>
        <div class="modal-body">
        <form class="form-horizontal" action="tambah.php" method="POST">
          <fieldset>
            <div class="form-group">
        <div class="col-lg-10">
            <input type="text" class="form-control"  placeholder="Masukkan Judul" name="Judul" required >
          </div>
        </div>
        <div class="form-group">
        <div class="col-lg-10">
            <textarea type="text" class="form-control"  placeholder="Masukkan Dokumen" name="Berita" required ></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <input type="reset"  class="btn btn-danger" value="Batal">
            <input type="submit" name="simpan" class="btn btn-primary" value="simpan">
          </div>
        </div>
      </fieldset>
    </form>
  </div>
        </div>
      </div>
    </div>