<!-- Begin Page Content -->
<div class="container-fluid">

    
    <div class="container">
	<div class="row" style="margin-top: 30px;">
		<div class="col-md-4 col-md-offset-3">
			<h3>Import Data</h3>
			<?php if(!empty($this->session->flashdata('status'))){ ?>
			<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
			<?php } ?>
			<form action="<?= base_url('index.php/ImportKelas/import_excel'); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Pilih File Excel</label>
					<input type="file" name="fileExcel">
				</div>
				<div>
					<button class='btn btn-success' type="submit">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        <span class="text font-weight-bold">Import</span></button>

				</div>
			</form>
		</div>
	</div>
</div><br>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h7 class="m-0 font-weight-bold text-primary float-right" >Data Kelas</h7>
    <button type ="button" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#modal_add"> <span class="icon text-white-50">
                                            <i class="fa-solid fa-notes-medical"></i>
                                        </span>
                                        <span class="text font-weight-bold">Tambah Data</span></button>
                                        <a href="<?php echo base_url('index.php/ControllerPdfGuru/index');?>" target="_blank" class="btn btn-sm btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-download"></i>
                                        </span>
                                        <span class="text font-weight-bold">PDF</span>
                                    </a>
    </div>
    <div class="card-body">
    <a href="<?php echo base_url('index.php/kelas/tambah');?>" class='btn btn-sm 
    btn-primary pull-right'><i class="fa-solid fa-notes-medical"></i>Kelas Baru</a>
    
        <div class="table-responsive">
        <table class="table table-bordered  table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-striped">
                
                
                    <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th>Tingkat Kelas</th>
                    <th>Jurusan</th>
                    <th width="18%">Aksi</th>
                    </tr>
                </thead>

                
                <tbody>
                <?php
$no = 1;
foreach($kelas as $u){
?>
<tr>
<td><?php echo $no++ ?></td>
<td><?php echo $u->nama_kelas ?></td>
<td><?php echo $u->tingkat_kelas ?></td>
<td><?php echo $u->jurusan ?></td>
<td>
<a href="<?php echo base_url().'index.php/kelas/edit/'.$u->id_kelas; ?>" title ="Edit" class="btn btn-primary btn-circle btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="<?php echo base_url().'index.php/kelas/hapus/'.$u->id_kelas; ?>" title ="Hapus" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>


</td>
</tr>
<?php } ?>
                </tbody>
            </table>
          
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- modal add-->
<div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel" style="float:left">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
			<form action="<?php echo base_url(). 'index.php/kelas/tambah_aksi'; ?>" class="container my-6" method="POST" id="myForm">
			<div class="modal-body">
            <label for="nama_kelas"><b>Nama Kelas</b></label>
      <input type="text" id="nama_kelas" class="form-control" placeholder="Masukkan Sesuai Data Anda" name="nama_kelas" required>

     
    <label class="font-weight-bold" for="tingkat_kelas">Tingkat</label><br>
        <select id="tingkat_kelas" class="form-control" name="tingkat_kelas" required>
        <option selected>Pilih Tingkat </option>
  <option value="10">10</option>
  <option value="11">11 </option>
  <option value="12">12</option>
        </select>
        <div class="form-group">
         
        <label class="font-weight-bold" for="jurusan">Jurusan</label><br>
        <select id="jurusan" class="form-control" name="jurusan" required>
        <option selected>Pilih Jurusan </option>
        <?php
 foreach($jurusan as $j){

    echo '<option value="'.$j->nama_jurusan.'">'.$j-> nama_jurusan.'</option>';
 }
    ?>
</select>
    </div>

        <button type="submit" class="btn  btn-primary">Kirim</button>




    </div>
</form>
        
</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->