

<div class= "tabel1">
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Tambah Kelas </h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'index.php/kelas/' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br/>
 <br/>
 <form action="<?php echo base_url(). 'index.php/kelas/tambah_aksi'; ?>" class="container my-6" method="POST" id="myForm">
	
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
 </div>
</div>
 </div>
