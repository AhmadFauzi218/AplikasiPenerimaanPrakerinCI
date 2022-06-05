
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
 <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data pengajuan</strong>
                        </div>
                        <div class="card-body">
                              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama Sekolah</th>
                                    <th>Jurusan</th>
                                    <th>waktu Pelaksanaan</th>
                                    <th>Status</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody id="show_data">
                                    
                                </tbody>
                              </table>
                        </div>
                    </div>
</div>

        <!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel"></h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">


                    <div class="form-group">
                        <!-- <label class="control-label col-xs-3" >Id Permohonan</label> -->
                        <div class="col-xs-9">
                            <input name="id_permohonan_edit" id="id_permohonan2" class="form-control" type="hidden" style="width:335px;" required readonly>
                        </div>
                    </div>
   
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Sekolah</label>
                        <div class="col-xs-9">
                            <input name="nama_sekolah_edit" id="nama_sekolah2" class="form-control" type="text" style="width:335px;" required readonly>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jurusan</label>
                        <div class="col-xs-9">
                            <input name="jurusan_edit" id="jurusan2" class="form-control" type="text" style="width:335px;" required readonly>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-xs-3" >Waktu Pelaksanaan</label>
                        <div class="col-xs-9">
                            <input name="waktu_pelaksanaan_edit" id="waktu_pelaksanaan2" class="form-control" type="text" style="width:335px;" required readonly>
                        </div>
                    </div>


                     <div class="form-group">
                        <label class="control-label col-xs-3" >Status</label>
                        <div class="col-xs-9">
                           <select class="form-control" style="Width:220px;" id="status2" name="status" size="1">
                              <option value="Pending" selected>pending</option>
                              <option value="Terima">DIterima</option>
                              <option value="Tolak">Ditolak</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label col-xs-3">Keterangan</label></div>
                            <div class="col-12 col-md-9"><textarea name="keterangan" id="keterangan2" rows="9" placeholder="Keterangan...." class="form-control"></textarea></div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Jawab</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL EDIT-->


<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        tampil_data();   //pemanggilan fungsi tampil barang.

         $('#bootstrap-data-table').DataTable();

        
        //fungsi tampil barang
        function tampil_data(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/admin/dt_admin/data_admin',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                     var no = '1';
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+ no++ +'</td>'+
                                '<td>'+data[i].nama_sekolah+'</td>'+
                                '<td>'+data[i].jurusan+'</td>'+
                                '<td>'+data[i].waktu_pelaksanaan+'</td>'+
                                '<td  class="btn btn-primary">'+data[i].status+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-primary fa fa-pencil-square-o item_edit" data="'+data[i].id_permohonan+'">  Jawab</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }
        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/admin/dt_admin/get_barang')?>",
                dataType : "JSON",
                data : {id_permohonan:id},
                success: function(data){
                    $.each(data,function(id_permohonan, nama_sekolah ,jurusan,waktu_pelaksanaan){
                        $('#ModalaEdit').modal('show');                        
                        $('[name="id_permohonan_edit"]').val(data.id_permohonan);
                        $('[name="nama_sekolah_edit"]').val(data.nama_sekolah);
                        $('[name="jurusan_edit"]').val(data.jurusan);
                        $('[name="waktu_pelaksanaan_edit"]').val(data.waktu_pelaksanaan);
                        $('[name="status"]').val(data.status);
                        $('[name="keterangan"]').val(data.keterangan);
                        
                         
                    });
                }
            });
            return false;
        });

        //Update Barang
        $('#btn_update').on('click',function(){
            var id_permohonan =$('#id_permohonan2').val();
            var status=$('#status2').val();
            var keterangan=$('#keterangan2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/admin/dt_admin/edit')?>",
                dataType : "JSON",
                data : {id_permohonan:id_permohonan, status:status , keterangan:keterangan},
                success: function(data){
                    swal({
                        title:"Jawaban",
                        text:"Anda Berhasil Menjawab Permohonan Prakerin ",
                        type: "success",
                      })
                    $('[name="id_permohonan_edit"]').val("");
                    $('[name="status"]').val("");
                    $('[name="keterangan"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });


    });

</script>
</body>
</html>
