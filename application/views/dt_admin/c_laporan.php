 <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Cetak Laporan</strong>
                        </div>
                        <table class="table table-hover table-striped">

                        <div class="card-body">
                              <table border="1" align="center">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama Sekolah</th>
                                    <th>Jurusan</th>
                                    <th>waktu Pelaksanaan</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
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
                                            <td class="btn btn-info btn-xs"><?php echo $row->status; ?></td>
                                            <td><?php echo $row->keterangan; ?></td>
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


