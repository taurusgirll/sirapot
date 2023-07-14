

<div class= "tabel1">
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Edit Mapel</h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'index.php/mapel/' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br/>
 <br/>
 <form action="<?php echo base_url(). 'index.php/mapel/update'; ?>" class="container my-6" method="POST" id="myForm">
 <?php foreach($mapel as $u){ ?>
           
    <input type="hidden" name="id_mapel" value="<?php 
    echo $u->id_mapel ?>">


 

    <label for="psw"><b>KD Mapel</b></label>
    <input type="text"  class="form-control" name="kd_mapel" value="<?php 
    echo $u->kd_mapel ?>"required><br>

    <label for="psw"><b>Nama Mapel</b></label>
    <input type="text"  class="form-control" name="nama_mapel"  value="<?php 
    echo $u->nama_mapel ?>" required><br>

        <button type="submit" class="btn  btn-primary">Kirim</button>




    </div>
</form>
<?php } ?>
 </div>
 </div>
</div>
 </div>
