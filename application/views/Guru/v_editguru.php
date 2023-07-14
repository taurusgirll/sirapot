



<div class= "tabel1">
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Edit Guru</h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'index.php/guru/' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br/>
 <br/>
 <form action="<?php echo base_url(). 'index.php/guru/update_guru'; ?>" class="container my-6" method="POST" id="myForm">
 <center><img src="<?=base_url('/assets/img/img_avatar2.png');?>" alt="Avatar" class="avatar" width="200px" style="border-radius: 100px; -moz-border-radius: 100px;"></center>
 <?php foreach($guru as $u){ ?>
    <input type="hidden" name="id_guru" value="<?php 
       echo $u->id_guru ?>">
<br>
      <label for="nama_guru"><b>Nama Guru</b></label>
      <input type="text"  class="form-control" name="nama_guru" value="<?php 
       echo $u->nama_guru ?>"required><br>

<label class="font-weight-bold" for="jenis_kelamin">Jenis Kelamin</label><br>
<select id="jenis_kelamin" class="form-control"  name="jenis_kelamin" required>
<option value="">--Pilih Jenis Kelamin--</option>
   <option value="L"<?php if($u->jenis_kelamin=="L") echo 'selected="selected"'; ?> >Laki-laki</option>
   <option value="P"<?php if($u->jenis_kelamin=="P") echo 'selected="selected"'; ?> >Perempuan</option>
   
</select>

   <br>
   <label for="alamat"><b>Alamat</b></label>
        <input type="textarea"  class="form-control" name="alamat"  value="<?php 
        echo $u->alamat ?>" required><br>
       
         <label for="no_hp"><b>Telepon</b></label>
         <input type="text"  class="form-control" name="no_hp"  value="<?php 
    echo $u->no_hp ?>" required><br>

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
 <label for="tempat_lahir"><b>Tempat Lahir</b></label>
        <input type="text"  class="form-control" name="tempat_lahir"  value="<?php 
    echo $u->tempat_lahir ?>"  required><br>
 

        <label for="tanggal_lahir"><b>Tanggal Lahir</b></label>
        <input type="date" class="form-control" name="tanggal_lahir"  value="<?php 
    echo $u->tanggal_lahir ?>" required><br>

        <label for="nip"><b>NIP</b></label>
        <input type="text"  class="form-control" name="nip"  value="<?php 
    echo $u->nip ?>" required><br>

        <button type="submit" class="btn btn-primary">Kirim</button>




    </div>
</form>
<?php } ?>
 </div>
 </div>
</div>
 </div>
