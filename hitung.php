 <div class="container-fluid bg-1 text-center">
      <h1>TF-IDF</h1>
    </div>
  </br>
    <div class="container-fluid bg-3 text-center">
      <div id="layerl1"></div>
      <div class="col-md-4 ">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                      <h3 class="panel-title">Jumlah Dokumen</h3>
                      </div>
                      <div class="panel-body">
                        
                        <div class="font"><center>
                        <?php
                          buatindex();
                        ?>
                      </center></div>
                  </div>           
              </div>
       
    </div>        
    <div id="layerl2"></div>
    <div class="col-md-4">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                      <h3 class="panel-title">Bobot Dokumen</h3>
                      </div>
                      <div class="panel-body">
                        <div class="font"><center>
                        <?php
                         	hitungbobot(); 
                        ?>
                      </center></div>
                  </div>             
            </div>     
        </div>
    <div id="layerl3"></div>
    <div class="col-md-4">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                      <h3 class="panel-title">Panjang Vektor</h3>
                      </div>
                      <div class="panel-body">
                        <div class="font"><center>
                        <?php
                          panjangvektor();       
                        ?>
                      </center></div>
                  </div>           
            </div>
    </div>
    </div>
<div class="main">
  <div class="container">
  <div class="row">
   <a href="?rute=koleksi" class="btn btn-danger" id="">Kembali</a>
  <a href="#" class="btn btn-success" id="tambah">Hasil Count</a>

<table class="table table-striped table-hover ">
<thead>
    <tr>
      <th>Id</th>
      <th>Term</th>
      <th>Doc-Id</th>
      <th>Count</th>
      <th>Bobot</th>
    </tr>
  </thead>
  <?php
	'</table>';
	$result = mysqli_query($konek,"SELECT * FROM tbindex ORDER BY Id");

	while($row = mysqli_fetch_array($result)) {

		print("<tr>");
		print("<td>" . $row['Id'] . "</td><td>" . $row['Term'] . "</td><td>" . $row['DocId'] .
			    "</td><td>" . $row['Count'] . "</td><td>" . $row['Bobot'] . "</td>");
		print("</tr>");

	}
	print("</table><hr />");
?>
<script type="text/javascript">
$('#tambah').click(function(){
$('#myModal').modal('show'); 
});

  </script>
    <!-- TAMBAH DATA MHS-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Panjang Vektor TF-IDF</h4>
        </div>
        <div class="modal-body">
        	<table class="table table-striped table-hover ">
				<thead>
				    <tr>
				      <th>Id Dokumen</th>
				      <th>Panjang Vektor</th>
				    </tr>
				  </thead>
	<?php
	$result = mysqli_query($konek,"SELECT * FROM tbvektor");

	while($row = mysqli_fetch_array($result)) {

		print("<tr>");
		print("<td>" . $row['DocId'] . "</td><td>" . $row['Panjang'] . "</td>");
		print("</tr>");

	}
	print("</table><hr />");
        	?>
      </div>
    </div>
  </div>
  </div>
</div>
</div>