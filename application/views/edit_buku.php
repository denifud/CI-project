<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
    
    <div class="container" style="margin-top: 80px">
        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo base_url() ?>buku" class="btn btn-md btn-success">Home</a>
        </div>

    <div class="container" style="margin-top: 80px">
        <div class="col-md-12">
            <?php echo form_open('buku/update') ?>

              <div class="form-group">
                <label for="text">ID Buku</label>
                <input type="text" name="no_isbn" value="<?php echo $data_buku->no_isbn ?>" class="form-control" placeholder="Masukkan No. ISBN">
                <input type="hidden" value="<?php echo $data_buku->id_buku ?>" name="id_buku">
              </div>

              <div class="form-group">
                <label for="text">Judul Buku</label>
                <input type="text" name="nama_buku" value="<?php echo $data_buku->nama_buku ?>" class="form-control" placeholder="Masukkan Nama Buku">
              </div>

              <div class="form-group">
                <label for="text">Tanggal Terbit</label>
                <input type="date" name="tanggal_terbit" value="<?php echo $data_buku->tanggal_terbit ?>" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">pengarang</label>
                <input type="text" name="pengarang" value="<?php echo $data_buku->pengarang ?>" class="form-control" >
              </div>

              <button type="submit" class="btn btn-md btn-success">Update</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>
    
    <div class="col-md-12" style="margin-top: 10px;"><!-- footer -->
 			<div class="alert btn-success text-center">&copy; Copyright Ma'fud Hasim</div>
 		</div><!-- footer -->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>