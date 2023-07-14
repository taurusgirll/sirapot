



<div class= "tabel1">
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Edit Ekstrakulikuler</h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'index.php/kelas/' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br/>
 <br/>
 <form action="<?php echo base_url(). 'index.php/ekskul/update'; ?>" class="container my-6" method="POST" id="myForm">
 <?php foreach($ekskul as $u){ ?>
       
    <input type="hidden" name="id_ekskul" value="<?php 
    echo $u->id_ekskul ?>">


 

    <label for="kd_ekskul"><b>KD Ekskul</b></label>
    <input type="text"  class="form-control" name="kd_ekskul" value="<?php 
    echo $u->kd_ekskul ?>"required><br>

    <label for="nama_ekskul"><b>Nama ekskul</b></label>
    <input type="text"  class="form-control" name="nama_ekskul"  value="<?php 
    echo $u->nama_ekskul ?>" required><br>

 
        

        <button type="submit" class="btn  btn-primary">Kirim</button>




    </div>
</form>
<?php } ?>
 </div>
 </div>
</div>
 </div>
