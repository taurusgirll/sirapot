

<div class= "tabel1">
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Bagi Tugas</h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'index.php/bagi_tugas/' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br/>
 <br/>
 <form method="post" action="<?php echo base_url().'index.php/bagi_tugas/tambah_aksi'; ?>">

 <div class="form-group">
 <label class="font-weight-bold" for="id_petugas">ID Petugas</label>
 <input type="text" name="id_petugas" id="id_petugas" placeholder="Masukkan data anda" class="form-control">
 </div>

<div class="form-group">
<label for="kd_mapel"><b>KD Mapel</b></label>
 <select class="form-control" name="kd_mapel" aria-label="Default select example">
 <option value=""> Pilih Mapel</option>
  <?php
  foreach($mapel as $a){
    echo '<option value="'.$a->nama_mapel.'">'.$a->nama_mapel.'</option>';
  }
  ?>
</select>
 </div>
<div class="form-group">
 <label class="font-weight-bold" for="id_kelas">ID Kelas</label>
 <select class="form-control" name="id_kelas" aria-label="Default select example">
 <option value="">Pilih kelas</option>
  <?php
  foreach($kelas as $u){
    echo '<option value="'.$u->nama_kelas.'">'.$u->nama_kelas.'</option>';
  }
  ?>
</select>
 </div>

 <div class="form-group">
 <label class="font-weight-bold" for="nama">Semester</label>
 <select id='semester' class="form-control" name="semester">
        <option value="">Pilih</option>
          <?php
          $x=1;

          while($x <= 6) {
            echo "<option value=".$x.">".$x."</option>";
            $x++;
          }
          ?>
</select></br>
 </div>

 <br>
 <div id="siswa" name="siswa"></div>
 <!-- <div class="form-group">
 <label class="font-weight-bold" for="nip">Nama Jurusan</label>
 <input type="text" class="form-control" name="nama_walikelas" 
 required="required" value="">
 </div> -->
 <input type="submit" class="btn btn-primary" value="Simpan">
 </form>

 </div>
 </div>
</div>
 </div>
