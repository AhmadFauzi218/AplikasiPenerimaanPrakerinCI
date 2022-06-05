<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
</head>
<body>
<div class="container">
    <!-- Page Heading -->

    <div class="row">
        <div id="reload">
        <table class="table table-hover" id="mydata">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id permohonan</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Nis</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                  <?php
                    $no =1;
                    foreach ($data->result() as $row) {
                      ?>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $row->id_permohonan; ?></td>
                      <td><?php echo $row->nama_siswa; ?></td>
                      <td><?php echo $row->jenis_kelamin; ?></td>
                      <td><?php echo $row->nis; ?></td>
                      <td></td>
      
                      <td></td>
                      <td>
                            <!-- <a href="<?php echo base_url(); ?>index.php/pengguna/dt_siswa/<?php echo $row->id_permohonan; ?>" class="btn btn-primary fa fa-users"> Lihat Siswa</a> -->
                      </td>
                </tr>
        <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>


</script>
</body>
</html>
