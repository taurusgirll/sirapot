<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Pdf Jurusan</title>
    <center><h1>Data Jurusan</h1></center>
<div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped" border="1" id="dataTable" width="100%">
            <thead class="bg-secondary text-light">
                <thead>
                    <tr>
                    <th>No</th>
                        <th>Kd Jurusan</th>
                        <th>Nama Jurusan</th>
             </tr>
        </thead>
<?php 
$no = 1;
foreach($jurusan as $u){ ?>
 <tr>
 <td><?php echo $no++ ?></td>
 <td><?php echo $u->kd_jurusan ?></td>
 <td><?php echo $u->nama_jurusan ?></td>
</tr>
<?php } ?>
</tbody>
</table>