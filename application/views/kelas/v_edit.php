
<div class= "tabel1">
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Edit Kelas </h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'index.php/kelas/' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br>
 <br>
 <form action="<?php echo base_url(). 'index.php/kelas/update'; ?>" class="container my-6" method="POST" id="myForm">
 <?php foreach($kelas as $u){ ?>
   <input type="hidden" name="id_kelas" value="<?php 
    echo $u->id_kelas ?>">
<br>
    <label for="nama_kelas"><b>Nama Kelas</b></label>
    <input type="text"  class="form-control" name="nama_kelas" value="<?php 
    echo $u->nama_kelas ?>"required>
     <br>
     <label for="tingkat_kelas"><b>Tingkat Kelas</b></label>
    <input type="text"  class="form-control" name="tingkat_kelas"  value="<?php 
    echo $u->tingkat_kelas ?>" required>
<br>
    <label for="jurusan"><b>Jurusan</b></label>
     <select name="jurusan" class="form-control">
    <?php
 foreach($jurusan as $j){

    echo '<option value="'.$j->nama_jurusan.'">'.$j-> nama_jurusan.'</option>';
 }
    ?>
</select>
<br>

    <button type="submit" class="btn  btn-primary">Kirim</button>



    </div>
    </div>
    </div>
    
</form>
<?php } ?>

