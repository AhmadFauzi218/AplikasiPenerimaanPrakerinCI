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
            <h1 class="page-header">Data
                <small>Sekolah</small>
                <a href="<?php echo base_url('index.php/pengguna/dt_siswa'); ?>" class="btn btn-warning fa fa-briefcase">Details</a>
                <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Ajukan Prakerin</a></div>

            </h1>
        </div>
    <div class="row">
        <div id="reload">
        <table class="table table-hover" id="mydata">
            <thead>
                <tr>
                    <th>No</th>
                    <th>jurusan</th>
                    <th>waktu_pelaksanaan</th>
                    <th>Status</th>
                    <th style="text-align: right;">Aksi</th>
                </tr>
            </thead>
            <tbody id="show_data">

            </tbody>
        </table>
        </div>
    </div>
</div>

        <!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Pengajuan</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Sekolah</label>
                        <div class="col-xs-9">
                           <input name="nama_sekolah" id="nama_sekolah" class="form-control input-lg" type="text" placeholder="Sekolah" style="width:335px;" required autocomplete="off" value="<?php echo $nama_sekolah; ?>" readonly disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jurusan</label>
                        <div class="col-xs-9">
                             <input name="jurusan" id="jurusan" class="form-control input-lg" type="text" placeholder="Jurusan Siswa" style="width:335px;" required autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Waktu</label>
                        <div class="col-xs-9">
                             <input name="waktu_pelaksanaan" id="waktu_pelaksanaan" class="form-control input-lg" type="text" placeholder="Waktu Pelaksanaan SD Waktu Selesai" style="width:335px;" required autocomplete="off">
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    
                    <button class="btn fa fa-close" data-dismiss="modal" aria-hidden="true"> Close</button>
                    <button class="btn btn-info fa fa-send-o" id="btn_simpan"> Save</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Ubah Pengajuan</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >id permohonan</label>
                        <div class="col-xs-9">
                            <input name="id_permohonan_edit" id="id_permohonan2" class="form-control" type="text" placeholder="id permohonan" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >jurusan</label>
                        <div class="col-xs-9">
                            <input name="jurusan_edit" id="jurusan2" class="form-control" type="text" placeholder="Jurusan" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >waktu</label>
                        <div class="col-xs-9">
                            <input name="waktu_pelaksanaan_edit" id="waktu_pelaksanaan2" class="form-control" type="text" placeholder="waktu" style="width:335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL EDIT-->


        <!-- MODAL add detail -->
        <div class="modal fade" id="Modalaaddetail" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Siswa</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >id permohonan</label>
                        <div class="col-xs-9">
                            <input name="id_permohonan_edit1" id="id_permohonan3" class="form-control" type="text" placeholder="Id permohonan" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Siswa</label>
                        <div class="col-xs-9">
                            <input name="nama_siswa" id="nama_siswa" class="form-control" type="text" placeholder="Nama Siswa" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
                        <div class="col-xs-9">
                           <select class="form-control" style="Width:220px;" id="jenis_kelamin" name="jenis_kelamin">
                              <option value="">~~~LAKI/PEREMPUAN~~~</option>
                              <option value="laki">Laki-Laki</option>
                              <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nis</label>
                        <div class="col-xs-9">
                            <input name="nis" id="nis" class="form-control" type="text" placeholder="Nomor Induk Siswa" style="width:335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn fa fa-close" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info fa fa-send-o" id="btn_add2">Tambah Siswa</button>
                </div>
            </form>
            </div>
            </div>
        </div>
<!-- endmodaladddetail -->

        <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">

                            <input type="hidden" name="id_permohonan_hapus" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda Yakin Akan Menghapus Data Sekolah Ini</p></div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        tampil_data();   //pemanggilan fungsi tampil barang.

        $('#mydata').dataTable();

        //fungsi tampil barang
        function tampil_data(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/pengguna/dt_pengguna/data_pengguna',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                     var no = '1';
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+ no++ +'</td>'+
                                '<td>'+data[i].jurusan+'</td>'+
                                '<td>'+data[i].waktu_pelaksanaan+'</td>'+
                                '<td>'+data[i].status+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-primary fa fa-pencil item_edit" data="'+data[i].id_permohonan+'"></a>'+' '+

                                    '<a href="javascript:;" class="btn btn-danger fa fa-trash item_hapus" data="'+data[i].id_permohonan+'"></a>'+' '+

                                    '<a href="javascript:;" class="btn btn-default fa fa-user-plus item_tambah" data="'+data[i].id_permohonan+'"></a>'+
                                    // '<a href="<?php echo base_url('index.php/pengguna/dt_siswa/details'); ?>" class="btn btn-warning fa fa-briefcase  item_detail" data="'+data[i].id_permohonan+'">Details</a>'+
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
                url  : "<?php echo base_url('index.php/pengguna/dt_pengguna/get_pengguna')?>",
                dataType : "JSON",
                data : {id_permohonan:id},
                success: function(data){
                    $.each(data,function(id_permohonan, jurusan, waktu_pelaksanaan){
                        $('#ModalaEdit').modal('show');
                        $('[name="id_permohonan_edit"]').val(data.id_permohonan);
                        $('[name="jurusan_edit"]').val(data.jurusan);
                        $('[name="waktu_pelaksanaan_edit"]').val(data.waktu_pelaksanaan);
                    });
                }
            });
            return false;
        });

 //GET UPDATE
        $('#show_data').on('click','.item_tambah',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/pengguna/dt_pengguna/get_pengguna')?>",
                dataType : "JSON",
                data : {id_permohonan:id},
                success: function(data){
                    $.each(data,function(id_permohonan){
                        $('#Modalaaddetail').modal('show');
                        $('[name="id_permohonan_edit1"]').val(data.id_permohonan);
                    });
                }
            });
            return false;
        });


        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="id_permohonan_hapus"]').val(id);
        });

        //Simpan Barang
      $('#btn_simpan').on('click',function(){
        if (!$("#nama_sekolah").val()) {
        alert('Anda Harus Merefresh Terlebih Dahulu');
        window.location.reload();
        return false;
      }
       if (!$("#jurusan").val()) {
        alert('Jurusan Belum Diisi');
        $("#jurusan").focus();
        return false;
      }      
       if (!$("#waktu_pelaksanaan").val()) {
        alert('waktu pelaksanaan belum diisi');
        $("#waktu_pelaksanaan").focus();
        return false;
      }
      var nama_sekolah = $('#nama_sekolah').val();
      var jurusan = $('#jurusan').val();
      var waktu_pelaksanaan= $('#waktu_pelaksanaan').val();
       $.ajax({
        type:"POST",
       url :"<?php echo base_url('index.php/pengguna/dt_pengguna/simpan_pengguna'); ?>",
        dataType:"JSON",
        data: {nama_sekolah:nama_sekolah,jurusan:jurusan,waktu_pelaksanaan:waktu_pelaksanaan},
        success: function(data){
          swal({
            title:"Tambah Pengauan",
            text:"Anda Berhasil Mengajukan Permohonan Prakerin ",
            type: "success",
          })
          $('[name = "nama_sekolah"]').val("");
          $('[name = "jurusan"]').val("");
          $('[name = "waktu_pelaksanaan"]').val("");
          $('#ModalaAdd').modal('hide');
          tampil_data().load();
        }
      });
      return false;
    });
   
        //Update Barang
        $('#btn_update').on('click',function(){
            var id_permohonan=$('#id_permohonan2').val();
            var jurusan=$('#jurusan2').val();
            var waktu_pelaksanaan=$('#waktu_pelaksanaan2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/pengguna/dt_pengguna/edit')?>",
                dataType : "JSON",
                data : {id_permohonan:id_permohonan , jurusan:jurusan, waktu_pelaksanaan:waktu_pelaksanaan},
                success: function(data){
                  swal({
                    title:"Ubah Data Pengajuan",
                    text:"Anda Berhasil Mengubah Data Pengajuan ",
                    type: "success",
                  })
                    $('[name="id_permohonan_edit"]').val("");
                    $('[name="jurusan_edit"]').val("");
                    $('[name="waktu_pelaksanaan_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/pengguna/dt_pengguna/hapus')?>",
            dataType : "JSON",
                    data : {id_permohonan: kode},
                    success: function(data){
                      swal({
                        title:"Hapus Data Pengajuan",
                        text:"Anda Berhasil Menghapus Data Pengajuan ",
                        type: "success",
                      })
                            $('#ModalHapus').modal('hide');
                            tampil_data();
                    }
                });
                return false;
            });

      $('#btn_add2').on('click',function(){
        if (!$("#nama_siswa").val()) {
        alert('Nama Siswa Belum Diisi');
       $("#nama_siswa").focus();
        return false;
      }
       if (!$("#jenis_kelamin").val()) {
        alert('Jenis Kelamin Belum Diisi');
        $("#jenis_kelamin").focus();
        return false;
      }      
       if (!$("#nis").val()) {
        alert('Nis Belum Diisi');
        $("#nis").focus();
        return false;
      }
      var id_permohonan = $('#id_permohonan3').val();
      var nama_siswa = $('#nama_siswa').val();
      var jenis_kelamin = $('#jenis_kelamin').val();
      var nis= $('#nis').val();
       $.ajax({
        type:"POST",
       url :"<?php echo base_url('index.php/pengguna/dt_pengguna/tambah_user'); ?>",
        dataType:"JSON",
        data: {id_permohonan:id_permohonan,nama_siswa:nama_siswa,jenis_kelamin:jenis_kelamin,nis:nis},
        success: function(data){
          swal({
            title:"Tambah Siswa",
            text:"Anda Berhasil Mengajukan Menambah Siswa Prakerin ",
            type: "success",
          })
          $('[name = "id_permohonan_edit1"]').val("");
          $('[name = "nama_siswa"]').val("");
          $('[name = "jenis_kelamin"]').val("");
          $('[name = "nis"]').val("");
          $('#Modalaaddetail').modal('hide');
          tampil_data().load();
        }
      });
      return false;
    });
   

});

</script>
</body>
</html>
