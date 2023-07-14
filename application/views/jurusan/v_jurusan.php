<!-- Begin Page Content -->
<div class="container-fluid">

    

    
    <div class="container">
	<div class="row" style="margin-top: 30px;">
		<div class="col-md-4 col-md-offset-3">
			<h3>Import Data</h3>
			<?php if(!empty($this->session->flashdata('status'))){ ?>
			<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
			<?php } ?>
			<form action="<?= base_url('index.php/ImportJurusan/import_excel'); ?>" method="post" enctype="multipart/form-data">
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
    <h7 class="m-0 font-weight-bold text-primary float-right" >Data Jurusan</h7>
    <button type ="button" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#modal_add"> <span class="icon text-white-50">
                                            <i class="fa-solid fa-notes-medical"></i>
                                        </span>
                                        <span class="text font-weight-bold">Tambah Data</span></button>
                                        <a href="<?php echo base_url('index.php/ControllerPdfJurusan/index');?>" target="_blank" class="btn btn-sm btn-info btn-icon-split">
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
                        <th>Kd Jurusan</th>
                        <th>Nama Jurusan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                $no = 1;
                foreach($jurusan as $u){ 
                    ?>
                    <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $u->kd_jurusan ?></td>
                    <td><?php echo $u->nama_jurusan ?></td>
                    <td>
                        <center>
                    <a href="<?php echo base_url().'index.php/jurusan/edit/'.$u->id_jurusan; ?>" title ="Edit" class="btn btn-primary btn-circle btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="<?php echo base_url().'index.php/jurusan/hapus/'.$u->id_jurusan; ?>" title ="Hapus" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    </center>
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


<!-- modal add-->
<div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel" style="float:left">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
			<form action="<?php echo base_url(). 'index.php/jurusan/tambah_aksi'; ?>" class="container my-6" method="POST" id="myForm">
			<div class="modal-body">

        <label for="kd_jurusan"><b>KD Jurusan</b></label>
        <input type="text" id="kd_jurusan" placeholder="masukkan sesuai data anda" class="form-control" name="kd_jurusan"  required><br>

        <label for="nama_jurusan"><b>Nama Jurusan</b></label>
        <input type="text" id="nama_jurusan" placeholder="masukkan sesuai data anda" class="form-control" name="nama_jurusan" required><br>

        <button type="submit" class="btn  btn-primary">Kirim</button>




    </div>
</form>
        
</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->