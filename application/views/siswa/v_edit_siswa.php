

<div class= "tabel1">
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Edit Siswa</h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'index.php/siswa/' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br/>
 <br/>
 <form action="<?php echo base_url(). 'index.php/siswa/siswa_update'; ?>" class="container my-6" method="POST" id="myForm">
 <center><img src="<?=base_url('/assets/img/img_avatar2.png');?>" alt="Avatar" class="avatar" width="200px" style="border-radius: 100px; -moz-border-radius: 100px;"></center>
 <?php foreach($siswa as $u){ ?>
   <input type="hidden" name="id_siswa" value="<?php 
   echo $u->id_siswa ?>">

   <label class="font-weight-bold" for="nis">NIS</label>
   <input type="text" class="form-control" name="nis" required="required" value="<?php 
   echo $u->nis ?>">
<br>
   <label class="font-weight-bold" for="nisn">NISN</label>
   <input type="text" class="form-control" name="nisn" required="required" value="<?php 
   echo $u->nisn ?>">
<br>
   <label class="font-weight-bold" for="nama">Nama</label>
   <input type="text" class="form-control" name="nama" required="required" value="<?php 
   echo $u->nama ?>">
<br>
<label class="font-weight-bold" for="jenis_kelamin">Jenis Kelamin</label><br>
<select id="jenis_kelamin" class="form-control"  name="jenis_kelamin" required>
<option value="">--Pilih Jenis Kelamin--</option>
   <option value="L"<?php if($u->jenis_kelamin=="L") echo 'selected="selected"'; ?> >Laki-laki</option>
   <option value="P"<?php if($u->jenis_kelamin=="P") echo 'selected="selected"'; ?> >Perempuan</option>
   
</select>

   <br>

   <label class="font-weight-bold" for="alamat_siswa">Alamat</label>
   <input type="text" class="form-control" name="alamat_siswa" required="required" value="<?php 
   echo $u->alamat_siswa ?>">
<br>
   <label class="font-weight-bold" for="tmpt_lahir">Tempat Lahir</label>
   <input type="text" class="form-control" name="tmpt_lahir"  required="required" value="<?php 
   echo $u->tmpt_lahir ?>">
<br>
   <label class="font-weight-bold" for="tgl_lahir">Tanggal Lahir</label>
   <input type="date" class="form-control" name="tgl_lahir" required="required" value="<?php 
   echo $u->tgl_lahir ?>">
<br>
   <label class="font-weight-bold" for="anak_ke">Anak Ke</label>
   <input type="text" class="form-control" name="anak_ke" 
   required="required" value="<?php 
    echo $u->anak_ke ?>">
 <br>
 <label class="font-weight-bold" for="agama">Agama</label><br>
<select id="agama" class="form-control"  name="agama" required>
<option value="">--Pilih Agama--</option>
   <option value="Islam"<?php if($u->agama=="Islam") echo 'selected="selected"'; ?> >Islam</option>
   <option value="Kristen"<?php if($u->agama=="Kristen") echo 'selected="selected"'; ?> >Kristen</option>
   <option value="Hindu"<?php if($u->agama=="Hindu") echo 'selected="selected"'; ?> >Hindu</option><br>
   <option value="Budha"<?php if($u->agama=="Budha") echo 'selected="selected"'; ?> >Budha</option>
   <option value="Katholik"<?php if($u->agama=="Katholik") echo 'selected="selected"'; ?> >Katholik<br>
   
</select>
<br>

   <label class="font-weight-bold" for="asal_sekolah">Asal Sekolah</label>
   <input type="text" class="form-control" name="asal_sekolah" required="required" value="<?php 
   echo $u->asal_sekolah ?>">
<br>
   <label class="font-weight-bold" for="no_ijazah">No Ijazah</label>
   <input type="text" class="form-control" name="no_ijazah" required="required" value="<?php 
   echo $u->no_ijazah ?>">
<br>

   <label class="font-weight-bold" for="tahun_ijazah">Tahun Ijazah</label>
   <input type="text" class="form-control" name="tahun_ijazah"  required="required" value="<?php 
   echo $u->tahun_ijazah ?>">
<br>

   <label class="font-weight-bold" for="tgl_masuk">Tanggal Masuk</label>
   <input type="date" class="form-control" name="tgl_masuk" required="required" value="<?php 
   echo $u->tgl_masuk ?>">
<br>

   <label class="font-weight-bold" for="no_hp_siswa">Telepon Siswa</label>
   <input type="text" class="form-control" name="no_hp_siswa" required="required" value="<?php 
   echo $u->no_hp_siswa ?>">
<br>

   <label class="font-weight-bold" for="nama_ibu">Nama Ibu</label>
   <input type="text" class="form-control" name="nama_ibu" required="required" value="<?php 
   echo $u->nama_ibu ?>">
<br>

   <label class="font-weight-bold" for="pekerjaan_ibu">Pekerjaan Ibu</label>
   <input type="text" class="form-control" name="pekerjaan_ibu" required="required" value="<?php 
   echo $u->pekerjaan_ibu ?>">
<br>

   <label class="font-weight-bold" for="nama_ayah">Nama Ayah</label>
   <input type="text" class="form-control" name="nama_ayah" required="required" value="<?php 
    echo $u->nama_ayah ?>">
 <br>

   <label class="font-weight-bold" for="pekerjaan_ayah">Pekerjaan Ayah</label>
   <input type="text" class="form-control" name="pekerjaan_ayah" required="required" value="<?php 
   echo $u->pekerjaan_ayah ?>">
<br>

   <label class="font-weight-bold" for="alamat_orang_tua">Alamat orang Tua</label>
   <input type="text" class="form-control" name="alamat_orang_tua" required="required" value="<?php 
   echo $u->alamat_orang_tua ?>">

<br>

        <button type="submit" class="btn btn-primary">Kirim</button>




    </div>
</form>
<?php } ?>
 </div>
 </div>
</div>
 </div>
