<!-- Begin Page Content -->
<div class="container-fluid">

    
    <div class="container">
	<div class="row" style="margin-top: 30px;">
		<div class="col-md-4 col-md-offset-3">
			<h3>Import Data</h3>
			<?php if(!empty($this->session->flashdata('status'))){ ?>
			<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
			<?php } ?>
			<form action="<?= base_url('index.php/ImportController/import_excel'); ?>" method="post" enctype="multipart/form-data">
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
    <h7 class="m-0 font-weight-bold text-primary float-right" >Data Guru</h7>
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
  
        <div class="table-responsive">
            <table class="table table-bordered  table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-striped">
                
                    <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Agama</th>
                <th>TTL</th>
                <th>NIP</th>
                <th width="17%">Opsi</th>
             </tr>
        </thead>
<?php 
$no = 1;
foreach($guru as $u){ ?>
 <tr>
    <td><?php echo $no++ ?></td>
<td><?php echo $u->nama_guru ?></td>

<td><?php
if ($u->jenis_kelamin =="L"){
        echo "laki-laki";
}else{
        echo"perempuan";
}
 ?></td>
<td><?php echo $u->alamat ?></td>
<td><?php echo $u->no_hp ?></td>
<td><?php echo $u->agama ?></td>
<td><?php echo $u->tempat_lahir.', '. $u->tanggal_lahir ?></td>
<td><?php echo $u->nip ?></td>
<td>
<a href="<?php echo base_url().'index.php/guru/edit_guru/'.$u->id_guru; ?>" title ="Edit" class="btn btn-primary btn-circle btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="<?php echo base_url().'index.php/guru/hapus_guru/'.$u->id_guru; ?>" title ="Hapus" class="btn btn-danger btn-circle btn-sm">
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
			<form action="<?php echo base_url(). 'index.php/guru/guru_tambah_aksi'; ?>" class="container my-6" method="POST" id="myForm">
			<div class="modal-body">
           
        <label for="nama_guru"><b>Nama Guru</b></label>
        <input type="text" id="nama_guru"  placeholder="masukkan sesuai data anda" class="form-control" name="nama_guru" required><br>
       
        <label class="font-weight-bold" for="jenis_kelamin">Jenis Kelamin</label>
        <select id="jenis_kelamin"  class="form-control" name="jenis_kelamin" required>
          <option value="">--Pilih Jenis Kelamin--</option>
          <option value="L">Laki-Laki</option>
          <option value="P">Perempuan</option>
        </select>
<br>
        <label for="alamat"><b>Alamat</b></label>
        <textarea type="text" id="alamat"  placeholder="masukkan sesuai data anda" class="form-control" name="alamat" required></textarea>
            <br>
        <label for="no_hp"><b>Telepon</b></label>
        <input type="text" id="no_hp"  placeholder="masukkan sesuai data anda" class="form-control" name="no_hp" required>
        <br>
        <label for="agama"><b>Agama</b></label><br>
        <select id="agama"  class="form-control" name="agama" required>
          <option value="">--Pilih Agama--</option>
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Hindu">Hindu</option>
          <option value="Budha">Budha</option>
          <option value="Katholik">Katholik</option>
        </select>

            <br> 
        <label for="tempat_lahir"><b>Tempat Lahir</b></label>
        <input type="text" id="tempat_lahir"  placeholder="masukkan sesuai data anda" class="form-control" name="tempat_lahir" required>
<br>
        <label for="tanggal_lahir"><b>Tanggal Lahir</b></label>
        <input type="date" id="tanggal_lahir"  placeholder="masukkan sesuai data anda" class="form-control" name="tanggal_lahir" required><br>

        <label for="nip"><b>NIP</b></label>
        <input type="text" id="nip"  placeholder="masukkan sesuai data anda" class="form-control" name="nip" required>
<br>
        <button type="submit" class="btn  btn-primary">Kirim</button>




    </div>
</form>

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->