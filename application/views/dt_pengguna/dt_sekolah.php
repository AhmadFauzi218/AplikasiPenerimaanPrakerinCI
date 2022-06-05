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
                    <th>Jurusan</th>
                    <th>jumlah</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                    <th>Lihat Murid </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <?php
                    $no =1;
                    foreach ($data->result() as $row) {
                      ?>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $row->jurusan; ?></td>
                      <td><?php echo $row->jumlah; ?></td>
                      <td class="btn btn-info btn-xs"><?php echo $row->status; ?></td>
                      <td><?php echo $row->keterangan; ?></td>
                      <td>
                            <a href="<?php echo base_url(); ?>index.php/pengguna/dt_siswa/print/<?php echo $row->id_permohonan; ?>" class="btn btn-primary fa fa-users"> Lihat Siswa</a>
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
