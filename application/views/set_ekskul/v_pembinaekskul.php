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
	<h7 class="m-0 font-weight-bold text-primary float-right" >Pembina Ekstrakurikuler</h7>
  
  <a href="<?php echo base_url('index.php/SetPembinaEkskul/tambah');?>" class="btn btn-sm btn-primary btn-icon-split">
  <span class="icon text-white-50">
  <i class="fa-solid fa-notes-medical"></i>
  </span>
  <span class="text font-weight-bold">Tambah Data</span>
</a>
  <a href="<?php echo base_url('index.php/GeneratePdfController/index');?>" target="_blank" class="btn btn-sm btn-info btn-icon-split">
  <span class="icon text-white-50">
	  <i class="fa fa-download"></i>
  </span>
  <span class="text font-weight-bold">PDF</span>
</a>      
   
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
<th width="1%">No</th>
<th>Nama Ekstrakurikuler</th>
<th>Nama Pembina</th>
<th>semester</th>
<th width="15%"><center>Aksi</center></th>
</tr>
</thead>
<tbody>
 
<?php 
$no = 1;
foreach ($ekskul as $p){ 
?>
<tr>
<td><?php echo $no++?></td>
<td><?php echo $p->nama_ekskul ?></td>
<td><?php echo $p->nama_pembina?></td>
<td><?php echo $p->semester ?></td>
<td>
<center>
<a href="<?php echo base_url().'index.php/SetPembinaEkskul/edit/'.$p->id; ?>" title ="Edit" class="btn btn-primary btn-circle btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="<?php echo base_url().'index.php/SetPembinaEkskul/hapus_pembina/'.$p->id; ?>" title ="Hapus" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    </center>

</td>
</tr>
<?php } ?>
</table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
