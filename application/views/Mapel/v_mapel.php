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
    <h7 class="m-0 font-weight-bold text-primary float-right" >Data Mapel</h7>
	<button type ="button" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#modal_add"> <span class="icon text-white-50">
                                            <i class="fa-solid fa-notes-medical"></i>
                                        </span>
                                        <span class="text font-weight-bold">Tambah Data</span></button>
                                        <a href="<?php echo base_url('index.php/generatePdfController22/index');?>" target="_blank" class="btn btn-sm btn-info btn-icon-split">
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
 <th width="10%">No</th>
 <th>KD Mapel</th>
 <th>Nama Mapel</th>
 <th><center>Aksi</center></th>
 </tr>
 </thead>
 <tbody>
 <?php 
 $no = 1;
 foreach($mapel as $a){
 ?>
 <tr>
 <td><?php echo $no++; ?></td>
 <td><?php echo $a->kd_mapel; ?></td>
 <td><?php echo $a->nama_mapel; ?></td>
 <td>
	<center>
 <a href="<?php echo base_url().'index.php/mapel/edit/'.$a->id_mapel; ?>" title ="Edit" class="btn btn-primary btn-circle btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="<?php echo base_url().'index.php/mapel/hapus/'.$a->id_mapel; ?>" title ="Hapus" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
									</center>
 </td>
 </tr>
 <?php 
 }
 ?>
 </tbody>
 </table>
 </div>
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
			<form action="<?php echo base_url(). 'index.php/mapel/tambah_aksi'; ?>" class="container my-6" method="POST" id="myForm">
			<div class="modal-body">
		<label for="kd_mapel"><b>KD Mapel</b></label>
        <input type="text" id="kd_mapel" placeholder="masukkan sesuai data anda" class="form-control" name="kd_mapel"  required><br>

        <label for="nama_mapel"><b>Nama Mapel</b></label>
        <input type="text" id="nama_mapel"  placeholder="masukkan sesuai data anda" class="form-control" name="nama_mapel" required><br>

        <button type="submit" class="btn  btn-primary">Kirim</button>




    </div>
</form>
        

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->