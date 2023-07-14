<!-- Begin Page Content -->
<div class="container-fluid">

    
    <div class="container">
	<div class="row" style="margin-top: 30px;">
		<div class="col-md-4 col-md-offset-3">
			<h3>Import Data</h3>
			<?php if(!empty($this->session->flashdata('status'))){ ?>
			<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
			<?php } ?>
			<form action="<?= base_url('index.php/Excel/upload'); ?>" method="post" enctype="multipart/form-data">
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
    <h7 class="m-0 font-weight-bold text-primary float-right" >Data Dunia Industri</h7>
	<button type ="button" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#modal_add"> <span class="icon text-white-50">
                                            <i class="fa-solid fa-notes-medical"></i>
                                        </span>
                                        <span class="text font-weight-bold">Tambah Data</span></button>
                                        <a href="<?php echo base_url('index.php/ControllerPdfdudi/index');?>" target="_blank" class="btn btn-sm btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-download"></i>
                                        </span>
                                        <span class="text font-weight-bold">PDF</span>
                                    </a>
            </div>
    <div class="card-body">
 
        <div class="table-responsive">
            <table class="table table-bordered  table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-striped">
                
                    <tr>
                <th>No</th>
                <th>Nama Dudi</th>
                <th>Alamat Dudi</th>
                <th>Nama Pembimbing</th>
                <th>Telepon</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Keluar</th>
                <th width="15%"><center>Aksi</center></th>
             </tr>
        </thead>
<?php 
$no = 1;
foreach($dudi as $u){ ?>
 <tr>
    <td><?php echo $no++ ?></td>
<td><?php echo $u->nama_dudi ?></td>
<td><?php echo $u->alamat_dudi ?></td>
<td><?php echo $u->nama_pembimbing ?></td>
<td><?php echo $u->no_hp ?></td>
<td><?php echo $u->tgl_masuk ?></td>
<td><?php echo $u->tgl_keluar ?></td>
<td><center>
<a href="<?php echo base_url().'index.php/dudi/edit_dudi/'.$u->id; ?>" title ="Edit" class="btn btn-primary btn-circle btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="<?php echo base_url().'index.php/dudi/hapus_dudi/'.$u->id; ?>" title ="Hapus" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    </center>
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
			<form action="<?php echo base_url(). 'index.php/dudi/dudi_tambah_aksi'; ?>" class="container my-6" method="POST" id="myForm">
			<div class="modal-body">
            <label for="nama_dudi"><b>Nama Dudi</b></label>
      <input type="text" id="nama_dudi" class="form-control" placeholder="Masukkan Sesuai Data Anda" name="nama_dudi" required>
        <br>
      <label for="alamat_dudi"><b>Alamat Dudi</b></label>
      <textarea type="text" id="alamat_dudi" class="form-control" placeholder="Masukkan Sesuai Data Anda" name="alamat_dudi" required></textarea>
      <br>
      <label for="nama_pembimbing"><b>Nama Pembimbing</b></label>
      <input type="text" id="nama_pembimbing" class="form-control" placeholder="Masukkan Sesuai Data Anda" name="nama_pembimbing" required>
   <br>
      <label for="no_hp"><b>Telepon</b></label>
      <input type="text" id="no_hp" class="form-control" placeholder="Masukkan Sesuai Data Anda" name="no_hp" required>
      <br>
      <label for="tgl_masuk"><b>Tanggal Masuk</b></label>
      <input type="date" id="tgl_masuk" class="form-control" name="tgl_masuk" required><br>
      <br>
      <label for="tgl_keluar"><b>Tanggal Keluar</b></label>
      <input type="date" id="tgl_keluar" class="form-control" name="tgl_keluar" required><br>
      
        <button type="submit" class="btn  btn-primary">Kirim</button>




    </div>
</form>
</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->