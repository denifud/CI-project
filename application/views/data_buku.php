<!DOCTYPE html>
<html>
<head>
    <title>Daftar Koleksi Buku</title>
   <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
    
    <div class="container" style="margin-top: 80px">
        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo base_url() ?>buku" class="btn btn-md btn-success">Home</a>
    
    <div class="col-md-12"> <!-- header gambar -->
 			<img src="<?php echo base_url('gambar/h1.webp');?>" style="width: 100%;height: 400px;">
 		</div> <!-- /header gambar -->
    

        </div>
    <div class="container" style="margin-top: 80px">
        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo base_url() ?>buku/tambah/" class="btn btn-md btn-success">Tambah Koleksi Buku</a>
        <hr>
        <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>ID Buku</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Terbit</th>
                    <th>Pengarang</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                    $no = 1; 
                    foreach($data_buku as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->no_isbn ?></td>
                    <td><?php echo $hasil->nama_buku ?></td>
                    <td><?php echo $hasil->tanggal_terbit ?></td>
                    <td><?php echo $hasil->pengarang ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>buku/edit/<?php echo $hasil->id_buku ?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url() ?>buku/hapus/<?php echo $hasil->id_buku ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>

                <?php } ?>

                </tbody>
              </table>
        </div>

    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#table').DataTable( {
    autoFill: true
} );
</script>

<div class="container" style="margin-top: 80px"><!-- footer -->
 			<div class="alert btn-success text-center">&copy; Copyright Ma'fud Hasim</div>
 		</div><!-- footer -->
</body>
</html>