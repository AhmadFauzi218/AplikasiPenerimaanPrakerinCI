 <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Cetak Laporan</strong>
                        </div>
                        <table class="table table-hover table-striped">
  <button onclick="openWin()" class="btn btn-primary fa fa-print">Cetak Laporan</button><br><br>

   <script>
      function openWin() {
          myWindow = window.open("<?php echo base_url(); ?>index.php/admin/c_laporan/print", "myWindow", "width=1000,height=1000");

        }
    </script>


                        <div class="card-body">
                              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama Sekolah</th>
                                    <th>Jurusan</th>
                                    <th>waktu Pelaksanaan</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                      <tr>
                                        <?php
                                          $no =1;
                                          foreach ($data->result() as $row) {
                                            ?>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_sekolah; ?></td>                      
                                            <td><?php echo $row->jurusan; ?></td>                      
                                            <td><?php echo $row->waktu_pelaksanaan; ?></td>                      
                                            <td><?php echo $row->jumlah; ?></td>
                                            <td class="btn btn-info btn-xs"><?php echo $row->status; ?></td>
                                      </tr>
                              <?php } ?>                  
                                </tbody>
                              </table>
                        </div>
                    </div>
</div>

</script>
</body>
</html>


