
<div class= "tabel1">
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Edit Data</h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'index.php/dudi/' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br/>
 <br/>
 <form action="<?php echo base_url(). 'index.php/bagi_tugas/update'; ?>" class="container my-6" method="POST" id="myForm">
 <?php foreach($bagi_tugas as $u){ ?>
             
  <input type="hidden" name="id_petugas" value="<?php 
    echo $u->id_petugas ?>">


 

    <label for="kd_mapel"><b>Nama mapel</b></label>
    <input type="text"  class="form-control" name="kd_mapel" value="<?php 
    echo $u->kd_mapel ?>"required><br>

    <label for="psw"><b>Id Kelas</b></label>
    <input type="text"  class="form-control" name="id_kelas"  value="<?php 
    echo $u->id_kelas ?>" required><br>

<label for="psw"><b>Semester</b></label>
    <input type="text"  class="form-control" name="semester"  value="<?php 
    echo $u->semester ?>" required><br>
        
      
    </div>
</form>
<?php } ?>
 </div>
 </div>
</div>
 </div>
