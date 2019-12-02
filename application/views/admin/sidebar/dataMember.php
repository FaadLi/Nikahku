
<!-- MAIN CONTENT-->
<div class="main-content" id="sb_memberv" style="display:none">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- USER DATA-->
            <div class="user-data m-b-30">
                <h3 class="title-3 m-b-30">
                    <i class="zmdi zmdi-account-calendar"></i>user data</h3>
                <div class="filters m-b-45 row">
                    <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border col">
                        <select class="js-select2" name="property">
                            <option selected="selected">All Properties</option>
                            <option value="">Products</option>
                            <option value="">Services</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <div class="rs-select2--dark rs-select2--sm rs-select2--border col">
                        <select class="js-select2 au-select-dark" name="time">
                            <option selected="selected">All Time</option>
                            <option value="">By Month</option>
                            <option value="">By Day</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    
                    <div class="col-6">
                    </div>
                    
                    <div class="table-data__tool-right">
                      <button class="au-btn au-btn-icon au-btn--green au-btn--small col" data-toggle="modal" data-target="#Modal_Add">
                        <i class="zmdi zmdi-plus"  >  </i>add item
                        </button>
                    </div>
                </div>
                <div class="table-responsive table-data">
                    <table id="mydata" class="table">
                        <thead>
                            <tr>
                                <td>Nama WO</td>
                                <td>Nama Pemilik</td>
                                <td>Alamat</td>
                                <td>No. Hp</td>
                                <td>Terakhir Aktif</td>
                                <td>Opsi</td>
                            </tr>
                        </thead>
                        <tbody id="show_member">
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END USER DATA-->

        </div>
    </div>
</div>

<!--MODAL Baru-->
    
<form id="formTambahMember">
    
    <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Member Baru</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>			           
          </div>
          <div class="modal-body ">			              
             
                <div class="form-group col-lg-12">
                    <label>Nama Pemilik</label>
                    <input type="text" id="dmNama" class="form-control" minlength="5" placeholder="Nama Pemilik"required="" >
                    <div class="invalid-feedback">Isi dulu</div>
                </div>

                <div class="form-group col-lg-12">
                    <label>Nama Wedding Organizer</label>
                    <input type="text" id="dmNamaWo" class="form-control" minlength="5" placeholder="Nama Wedding Organizer"required="" >
                    <div class="invalid-feedback">Isi dulu</div>
                </div>

                <div class="form-group col-lg-12">
                    <label>E-mail </label>
                    <input type="email" id="dmEmail" class="form-control" minlength="5" placeholder="E-mail"required="" >
                    <div class="invalid-feedback">Isi dulu</div>
                </div>


                <div class="form-group col-lg-12 row"  id="show_hide_password">
                    <label class="col-12">Password</label>
                    <input type="password" id="dmPassword" class="form-control col-lg-10" minlength="8" placeholder="Password"required=""  >
                    <div class="input-group-addon col-lg-2">
                        <a href="#"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                    </div>
                    <div class="invalid-feedback">Isi dulu</div>
                </div>
                
              
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary col-md-3" data-dismiss="modal">Batal</button>
              <button type="submit" id="btn_push" class="btn btn-primary col-md-3">Tambah</button>
          </div>
        </div>
      </div>
    </div>
  </form>
<!--END MODAL baru-->

<!--MODAL DELETE-->
<form>
    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Hapus User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>			           
        </div>
        <div class="modal-body">
            <strong id="namaUser"> Nama User </strong>
            
        </div>
        <div class="modal-footer">
            <input type="hidden" name="id_user" id="id_user" class="form-control">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="button" type="submit" id="btn_delete" class="btn btn-danger">Yes</button>
        </div>
        </div>
    </div>
    </div>
</form>
<!--END MODAL DELETE-->


<!-- END PAGE CONTAINER-->

<!-- JS TABEL -->

<script src="<?php echo base_url() ?>assets/admin/vendor/jquery-3.2.1.min.js"></script>

<script type="text/javascript" >
    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            console.log("HIDEN");
            if($('#show_hide_password input').attr("type") == "text"){
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass( "fa-eye-slash" );
                $('#show_hide_password i').removeClass( "fa-eye" );

            }else if($('#show_hide_password input').attr("type") == "password"){
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass( "fa-eye-slash" );
                $('#show_hide_password i').addClass( "fa-eye" );
            }
        });
    });
    
    $(document).ready(function() {
        show();
        console.log("tampil");
        function show(){
            console.log("GetDataMember");

            $.ajax({
            async :false,
            type  : 'ajax',
            url   : '<?php echo base_url();?>index.php/CAdmin/getMember',
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                                        
                    var kosong = "kosong";
                    html +=
                    
                    '<tr>'+
                        '<td>'+
                            '<span class="role member">'+data[i].namaWo+' </span>'+
                        '</td>'+

                        '<td>'+
                            '<div><h6>'+data[i].nama+'</h6><span><a href="#">'+data[i].email+'</a> </span> </div>'+
                        '</td>'+

                        '<td>'+
                            '<span>'+data[i].alamat+'</span>'+
                        '</td>'+

                        '<td>'+
                            '<span>'+data[i].no_hp+'</span>'+
                        '</td>'+

                        '<td>'+
                            '<span>'+kosong+'</span>'+
                        '</td>'+

                        '<td>'+
                            '<button class="more zmdi zmdi-mail-send"'+ 
                            'data-toggle="tooltip"' +
                            'data-placement="top"' +
                            'title="Detail">'+
                            '</button>'+

                            '<button class="more zmdi zmdi-delete item_delete"'+ 
                            'data-toggle="tooltip"' +
                            'data-placement="top"' +
                            'title="Reset Password"'+
                            'data-id="'+data[i].id+'"'+
                            'data-namaWo="'+data[i].namaWo+'">'+
                            
                            '</button>'+
                                
                            
                        '</td>'+
                            
                    '</tr>';
                    
                $('#show_member').html(html);
                }
                            
            }
            });
        }

    //   ========================  Start ADD RECORD ====================================
        $('#formTambahMember').submit(function(e){
          e.preventDefault();
        e.stopPropagation(); 
        var namaWo      = $('#dmNamaWo').val();
        var nama        = $('#dmNama').val();
        var email       = $('#dmEmail').val();
        var password    = $('#dmPassword').val();

        console.log("tambah kategori");        

        // alert(namaWo+" +"+nama +" + "+email+" + "+password);
    //      return;
        $.ajax({
            type : "POST",
            url  : "<?php echo site_url(); ?>/CAdmin/createMember",
            dataType : "JSON",
            data : {namaWo,
                    nama,
                    email,
                    password}, 
            
            success:function(data){
            
            alert("Berhasil Ditambah");
            location.reload();
            }
            
        });

        return false;
        });
    //   ========================  END ADD RECORD ====================================
 
        
    //  ========================  START DELETE RECORD ================================
        $('#show_member').on('click','.item_delete',function(){
            //  alert("TES");


            // alert($(this).data('namaWo'));

            // console.log("delete");
            // var nama = "ini nama";
            // var namaWo = $(this).data('id');
            
            // console.log(nama);
            // console.log(namaWo);

            //  Mengambil data json dari array
            var id = $(this).data('id');
            $('[name="id_user"]').val(id);    
            
            $('#Modal_Delete').modal('show');
            document.getElementById("namaUser").innerHTML=" Apakah anda yakin ingin menghapus Member ini ? ";
            // document.getElementById("namaUser").
            
            
        });
        //delete record to database
            $('#btn_delete').on('click',function(){
            var id_user = $('#id_user').val();
            
            console.log("S");
            console.log(id_user);
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url(); ?>/CAdmin/deleteMember",
                dataType : "JSON",
                data : {id:id_user},

                success: function(data){
                    console.log("berhasil");
                    // $('[name="id_user"]').val("");
                    $('#Modal_Delete').modal('hide');
                    
                    alert("Berhasil Dihapus");
                    location.reload();
                }
            });
            return false;
        });

    // ========================  END DELETE RECORD ====================================

        function refresh() {
        $('#mydata').DataTable().destroy();
        $('#show_member').empty();
        
        show();
        } 
    });
</script>


