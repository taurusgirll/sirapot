



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
 <form action="<?php echo base_url(). 'index.php/dudi/update_dudi'; ?>" class="container my-6" method="POST" id="myForm">
 <?php foreach($dudi as $u){ ?>
             
      <input type="hidden" name="id" value="<?php 
       echo $u->id ?>">

      <label for="nama_dudi"><b>Nama Dudi</b></label>
      <input type="text"  class="form-control" name="nama_dudi" value="<?php 
       echo $u->nama_dudi ?>"required><br>


<label for="nama_pembimbing"><b>Nama Pembimbing</b></label>
        <input type="text"  class="form-control" name="nama_pembimbing"  value="<?php 
        echo $u->nama_pembimbing ?>"  required><br>

        <label for="alamat_dudi"><b>Alamat Dudi</b></label>
        <input type="textarea"  class="form-control" name="alamat_dudi"  value="<?php 
        echo $u->alamat_dudi ?>" required><br>

        
       
         <label for="no_hp"><b>Telepon</b></label>
         <input type="text"  class="form-control" name="no_hp"  value="<?php 
    echo $u->no_hp ?>" required><br>
        

        
 

        <label for="tgl_masuk"><b>Tanggal Masuk</b></label>
        <input type="date" class="form-control" name="tgl_masuk"  value="<?php 
    echo $u->tgl_masuk ?>" required><br>


<label for="tgl_keluar"><b>Tanggal Keluar</b></label>
        <input type="date" class="form-control" name="tgl_keluar"  value="<?php 
    echo $u->tgl_keluar ?>" required><br>
        <button type="submit" class="btn  btn-primary">Kirim</button>




    </div>
</form>
<?php } ?>
 </div>
 </div>
</div>
 </div>
