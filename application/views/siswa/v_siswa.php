<!-- Begin Page Content -->
<div class="container-fluid">

    

<!-- Page Heading -->

    
    <div class="container">
	<div class="row" style="margin-top: 30px;">
		<div class="col-md-4 col-md-offset-3">
			<h3>Import Data</h3>
            <div class="container">
			<?php if(!empty($this->session->flashdata('status'))){ ?>
			<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
			<?php } ?>
			<form action="<?= base_url('index.php/ImportSiswa/Import_excel'); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Pilih File Excel</label>
					<input type="file" name="fileExcel">
				</div>
				<div>
					<button class='btn btn-success' type="submit">
						<span class="glyphicon glyphicon-plus font" aria-hidden="true"></span>
                        <span class="text font-weight-bold">Import</span></button>
				</div>
			</form>
		</div>
	</div>
	</div>
</div><br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h7 class="m-0 font-weight-bold text-primary float-right" >Data Siswa</h7>
    <button type ="button" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#modal_add"> <span class="icon text-white-50">
                                            <i class="fa-solid fa-notes-medical"></i>
                                        </span>
                                        <span class="text font-weight-bold">Tambah Data</span></button>
    <a href="<?php echo base_url('index.php/GeneratePdfController/index');?>" target="_blank" class="btn btn-sm btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-download"></i>
                                        </span>
                                        <span class="text font-weight-bold">PDF</span>
                                    </a>
            </div>
    <div class="card-body">
    <div class="container mt-3">
    <div class="container shadow-container mt-3">
        <?php if($this->session->flashdata('success') != ""):?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success');?>
        </div>
        <?php endif ?>
        <?php if($this->session->flashdata('error') != ""):?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error');?>
        </div>
        <?php endif ?>
					</div>
 
  
        <div class="table-responsive">
            <table class="table table-bordered  table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-striped">
                    <tr>
<th>No</th>
<th>Nis</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th width="20%">Temp.Tgl lahir</th>
<th>Agama</th>
<th>Telp</th>
<th>Alamat</th>
<th width="30%">Aksi</th>
</tr>
</thead>
<tbody>
 
<?php 
$no = 1;
foreach ($siswa as $u){ 
?>
<tr>
<td><?php echo $no++?></td>
<td><?php echo $u->nis ?></td>

<td><?php echo $u->nama ?></td>
<td><?php
if ($u->jenis_kelamin =="L"){
       echo "laki-laki";
}else{
       echo"perempuan";
}
?></td>
<td><?php echo $u->tmpt_lahir.', '. $u->tgl_lahir ?></td>
<td><?php echo $u->agama ?></td>
<td><?php echo $u->no_hp_siswa ?></td>
<td><?php echo $u->alamat_siswa ?></td>
<td>
<a href="<?php echo base_url().'index.php/siswa/edit_siswa/'.$u->id_siswa; ?>" title ="Edit" class="btn btn-primary btn-circle btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="<?php echo base_url().'index.php/siswa/hapus_siswa/'.$u->id_siswa; ?>" title ="Hapus" class="btn btn-danger btn-circle btn-sm">
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
			<form action="<?php echo base_url().'index.php/siswa/siswa_tambah_aksi'; ?>" class="container my-6" method="POST" id="myForm">
			<div class="modal-body">
            <label for="nis"><b>NIS</b></label>
        <input type="text" id="nis"  placeholder="masukkan sesuai data anda" class="form-control" name="nis" required><br>

        <label for="nisn"><b>NISN</b></label>
        <input type="text" id="nisn"  placeholder="masukkan sesuai data anda" class="form-control" name="nisn" required><br>

        <label for="nama"><b>Nama</b></label>
        <input type="text" id="nama"  placeholder="masukkan sesuai data anda" class="form-control" name="nama" required><br>
        
           
        <label for="nama"><b>Jenis Kelamin</b></label>
        <select id="jenis_kelamin" class="form-control" name="jenis_kelamin" required>
          <option value="">--Pilih Jenis Kelamin--</option>
          <option value="L">Laki-Laki</option>
          <option value="P">Perempuan</option>
        </select>
        <br>

        <label for="alamat_siswa"><b>Alamat</b></label>
        <textarea type="text" id="alamat_siswa"  placeholder="masukkan sesuai data anda" class="form-control" name="alamat_siswa" required></textarea>
<br>
        <label for="tmpt_lahir"><b>Tempat Lahir</b></label>
        <input type="text" id="tmpt_lahir"  placeholder="masukkan sesuai data anda" class="form-control" name="tmpt_lahir" required><br>
        
        <label for="tgl_lahir"><b>Tanggal Lahir</b></label>
        <input type="date" id="tgl_lahir"  placeholder="masukkan sesuai data anda" class="form-control" name="tgl_lahir" required><br>

        <label for="anak_ke"><b>Anak Ke-</b></label><br>
        <select id='anak_ke' class="form-control" name="anak_ke">
        <option value="">--Pilih--</option>
          <?php
          $x=1;

          while($x <= 10) {
            echo "<option value=".$x.">".$x."</option>";
            $x++;
          }
          ?>
</select></br>
<label for="agama" ><b>Agama</b></label><br>
        <select id="agama" class="form-control" name="agama" required>
          <option value="">--Pilih Agama--</option>
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Hindu">Hindu</option>
          <option value="Budha">Budha</option>
          <option value="Katholik">Katholik</option>
        </select>
<br>
        <label for="asal_sekolah"><b>Asal Sekolah</b></label>
        <input type="text" id="asal_sekolah" placeholder="masukkan sesuai data anda"  placeholder="masukkan sesuai data anda" class="form-control" name="asal_sekolah" required><br>

        <label for="no_ijazah"><b>No Ijazah</b></label>
        <input type="text" id="no_ijazah" placeholder="masukkan sesuai data anda" class="form-control" name="no_ijazah" required><br>

        <label for="tahun_ijazah"><b>Tahun Ijazah</b></label>
        <input type="text" id="tahun_ijazah" placeholder="masukkan sesuai data anda" class="form-control" name="tahun_ijazah" required><br>

        <label for="tgl_masuk"><b>Tanggal Masuk</b></label>
        <input type="date" id="tgl_masuk" class="form-control" name="tgl_masuk"><br>

        <label for="no_hp_siswa"><b>Telepon Siswa</b></label>
        <input type="text" id="no_hp_siswa" placeholder="masukkan sesuai data anda" class="form-control" name="no_hp_siswa" required><br>
        
        <label for="nama_ibu"><b>Nama Ibu</b></label>
        <input type="text" id="nama_ibu" placeholder="masukkan sesuai data anda" class="form-control" name="nama_ibu" required><br>

        <label for="pekerjaan_ibu"><b>Pekerjaan Ibu</b></label>
        <input type="text" id="pekerjaan_ibu" placeholder="masukkan sesuai data anda" class="form-control" name="pekerjaan_ibu" required><br>

        <label for="nama_ayah"><b>Nama Ayah</b></label>
        <input type="text" id="nama_ayah" placeholder="masukkan sesuai data anda" class="form-control" name="nama_ayah" required><br>

        <label for="pekerjaan_ayah"><b>Pekerjaan Ayah</b></label>
        <input type="text" id="pekerjaan_ayah" placeholder="masukkan sesuai data anda" class="form-control" name="pekerjaan_ayah" required><br>

        <label for="alamat_orang_tua"><b>Alamat Orang Tua</b></label>
        <input type="text" id="alamat_orang_tua" placeholder="masukkan sesuai data anda" class="form-control" name="alamat_orang_tua" required><br>


      <button type="submit" class="btn  btn-primary">Kirim</button>




    </div>
</form>


</div>
<!-- End of Content Wrapper -->


</div>
<!-- End of Page Wrapper -->


