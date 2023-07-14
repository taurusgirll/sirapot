



<div class= "tabel1">
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h5>Edit Jurusan</h5>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'index.php/jurusan/' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br/>
 <br/>
 <form action="<?php echo base_url(). 'index.php/jurusan/update'; ?>" class="container my-6" method="POST" id="myForm">
 <?php foreach($jurusan as $u){ ?>
          
    <input type="hidden" name="id_jurusan" value="<?php 
    echo $u->id_jurusan ?>">


 

    <label for="psw"><b>KD Jurusan</b></label>
    <input type="text"  class="form-control" name="kd_jurusan" value="<?php 
    echo $u->kd_jurusan ?>"required><br>

    <label for="psw"><b>Nama Jurusan</b></label>
    <input type="text"  class="form-control" name="nama_jurusan"  value="<?php 
    echo $u->nama_jurusan ?>" required><br>

 

        <button type="submit" class="btn  btn-primary">Kirim</button>




    </div>
</form>
<?php } ?>
 </div>
 </div>
</div>
 </div>
