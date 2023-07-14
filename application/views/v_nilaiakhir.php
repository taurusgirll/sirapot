<?php
include('template/header.php');
include('template/wrapper.php');
include('template/navbar.php');
?>



<div class= "tabel1">
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Nilai Akhir </h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'index.php/Nilai_akhir/' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br/>
 <br/>
 <form method="post" action="<?php echo base_url().'index.php/Nilai_akhir/tambah_aksi'; ?>">

 <div class="form-group">
 <label class="font-weight-bold" for="nama">Semester</label>
 <select class="form-control" name="semester" id="semester" aria-label="Default select example">
  <option selected>Pilih Semester </option>
  
<?php foreach ($semester as $j) {
    echo '<option value="' . $j->semester . '">' . $j->semester. '</option>';
} ?>
</select>
 </div>

<div class="form-group">
 <label class="font-weight-bold" for="nama">Kelas</label>
 <select class="form-control" name="kelas" id="kelas" aria-label="Default select example">
  <option selected>Pilih kelas </option> <?php foreach ($kelas as $j) {
      echo '<option value="' . $j->id_kelas . '">' . $j->nama_kelas . '</option>';
  } ?>
</select>
 </div>

 <div class="form-group">
 <label class="font-weight-bold" for="nama">Mapel</label>
 <select class="form-control" name="mapel" id="mapel" aria-label="Default select example">
</select>
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

 <?php
 include('template/footer.php');
?>
<script language="javascript">
$(document).ready(function(){
	// $('#semester').change(function(){
	// 	var semester = $('#semester').val();
    //     // console.log('halo');
    //     // alert(semester);
		
	// 	$.ajax({
	// 		url:"<?php echo base_url('index.php/Nilai_akhir/get_kelas');?>",
	// 		method : "POST",
	// 		data : {semester: semester},
	// 		async : true,
	// 		dataType : 'json',
	// 		success:function(data){
	// 			console.log(data);
                
	// 			var html = '';
	// 			var i;
    //              html += '<option value=>pilih kelas</option>';
	// 			for(i=0; i<data.length; i++){
	// 				html += '<option value='+data[i].id_kelas+'>'+data[i].nama_kelas+'</option>';
	// 			}				
	// 			$('#kelas').html(html);
	// 			$('#kelas').change();
	// 		}
	// 	})
	// return false ;
	// });
  $('#kelas').change(function(){
		var semester = $('#semester').val();
    var kelas = $('#kelas').val();
		
		$.ajax({
			url:"<?php echo base_url('index.php/Nilai_akhir/get_mapel');?>",
			method : "POST",
			data : {kelas: kelas},
			async : true,
			dataType : 'json',
			success:function(data){
				console.log(data);
                
				var html = '';
				var i;
                html += '<option value=>pilih mapel</option>';
				for(i=0; i<data.length; i++){
					html += '<option value='+data[i].kd_mapel+'>'+data[i].nama_mapel+'</option>';
				}				
				$('#mapel').html(html);
				//$('#kelas').change();
			}
		})
	return false ;
	});
  $('#mapel').change(function(){
		var semester = $('#semester').val();
    var kelas = $('#kelas').val();
    var mapel = $('#mapel').val();
		
		$.ajax({
			url:"<?php echo base_url('index.php/Nilai_akhir/get_siswa');?>",
			method : "POST",
			data : {kelas: kelas},
			async : true,
			dataType : 'json',
			success:function(data){
				console.log(data);
                
				var html = '';
				var i;
				var no =1;

        html += '<table table class="table table-bordered  table-hover table-default" id="dataTable" width="100%" cellspacing="0"> <tr><td>No</td><td>Nis</td><td>Nama Siswa</td><td>Nilai</td></tr>';

				for(i=0; i<data.length; i++){
					html += '<tr><td>'+no+'</td><td>'+data[i].nis+'</td><td>'+data[i].nama+'</td><td><input type="text" class="form-control" name="nilai'+i+'"></td></tr>';
					html+= '<input type="hidden" class="form-control" name="nis'+i+'" value="'+data[i].nis+'">';
//           html += '<option value='+data[i].kd_mapel+'>'+data[i].nama_mapel+'</option>';
no++;

				}
				html+= '<input type="hidden" class="form-control" name="jumlah" value="'+i+'">';		
				html +='</table>';		
				$('#siswa').html(html);
				// $('#kelas').change();
			}
		})
	return false ;
	});
});
</script>







