<!--MODAL DELETE-->
<form>
    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Hapus Dekorasi</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>			           
        </div>
        <div class="modal-body">
            <strong id="namaUser"> Nama User </strong>
            
        </div>
        <div class="modal-footer">
            <input type="hidden" name="id_dekor" id="id_dekor" class="form-control">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="button" type="submit" id="btn_delete" class="btn btn-danger">Yes</button>
        </div>
        </div>
    </div>
    </div>
</form>
<!--END MODAL DELETE-->

<!-- START DEKORASI -->
<div class="container" id="dekorasiv" style="display:block">
    <h3>Data Dekorasi Member</h3>
    <table id="mydata" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Kategori Warna</th>
                <th>Kategori Jenis</th>
                <th>Foto</th>
                <th>Opsi</th>
                
            </tr>
        </thead>
        <tbody id="show_dekor">
        
        </tbody>
    </table>



    <script type="text/javascript" >
        $(document).ready(function() {        
            show();    
            function show(){
                console.log("tampil");

                $.ajax({
                async :false,
                type  : 'ajax',
                url   : '<?php echo base_url();?>index.php/CMember/getDekorasi',
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;

                    for(i=0; i<data.length; i++){
                    var tr = $('<tr>').append(
                        $('<td>').text(data[i].nama),
                        $('<td>').text(data[i].keterangan),
                        $('<td>').text(data[i].harga),
                        $('<td>').text(data[i].kat_warna),
                        $('<td>').text(data[i].kat_jenis),
                        $('<td>').text(data[i].image),
                        $('<td>').html('<a href="javascript:void(0);" class="btn btn-danger item_delete" data-id="'+data[i].id+'"data-nama="'+data[i].nama+'">Hapus</a>')
                    );
                    tr.appendTo('#show_dekor');
                    
                    }
                    // $(".table").DataTable({
                        
                    //     "lengthMenu": [[5,10,15,25,-1],[5,10,15,25,"Semua"]]
                        
                    // }); 
                                
                }
                });
            }
            
            // DELETE USER
            $('#show_dekor').on('click','.item_delete',function(){
                //  alert("TES");
                //  alert($(this).data('username'));

                //  Mengambil data json dari array
                var id = $(this).data('id');
                var nama = $(this).data('nama');
                 
                
                $('#Modal_Delete').modal('show');
                document.getElementById("namaUser").innerHTML=" Apakah anda yakin ingin menghapus '"+nama+"' ? ";
                
                
                $('[name="id_dekor"]').val(id);
            });
            //delete record to database
             $('#btn_delete').on('click',function(){
                var id_dekor = $('#id_dekor').val();
                
                console.log(id_dekor);
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/CMember/deleteDekorasi",
                    dataType : "JSON",
                    data : {id:id_dekor,
                            tabelDb:tabelDb},

                    success: function(data){
                        console.log("berhasil");
                        $('[name="id_dekor"]').val("");
                        $('#Modal_Delete').modal('hide');
                        
                       refresh();
                        
                        // location.reload();
                    }
                });
                return false;
            });
            //END DELETE USER

            function refresh() {
            $('#mydata').DataTable().destroy();
            $('#show_dekor').empty();
            
            show();
            } 
        });
    </script>
</div>
<!-- END DEKORASI -->

<!-- START PAKAIAN -->
<div class="container" id="pakaianv" style="display:none">
    <h3>Data Pakaian Member</h3>
    <table id="mydata" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Kategori Warna</th>
                <th>Kategori Jenis</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody id="show_pakaian">
        
        </tbody>
    </table>


    <script type="text/javascript" >
        $(document).ready(function() {        
            show();    
            function show(){

                $.ajax({
                async :false,
                type  : 'ajax',
                url   : '<?php echo base_url();?>index.php/CMember/getPakaian',
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;

                    for(i=0; i<data.length; i++){
                    var tr = $('<tr>').append(
                        $('<td>').text(data[i].nama),
                        $('<td>').text(data[i].keterangan),
                        $('<td>').text(data[i].harga),
                        $('<td>').text(data[i].kat_warna),
                        $('<td>').text(data[i].kat_jenis),
                        $('<td>').text(data[i].image),
                    );
                    tr.appendTo('#show_pakaian');
                    
                    }
                    // $(".table").DataTable({
                        
                    //     "lengthMenu": [[5,10,15,25,-1],[5,10,15,25,"Semua"]]
                        
                    // }); 
                                
                }
                });
            }
            // DELETE USER
            $('#show_dekor').on('click','.item_delete',function(){
                //  alert("TES");
                //  alert($(this).data('username'));

                //  Mengambil data json dari array
                var id = $(this).data('id');
                var nama = $(this).data('nama');
                 
                
                $('#Modal_Delete').modal('show');
                document.getElementById("namaUser").innerHTML=" Apakah anda yakin ingin menghapus '"+nama+"' ? ";
                
                
                $('[name="id_dekor"]').val(id);
            });
            //delete record to database
             $('#btn_delete').on('click',function(){
                var id_dekor = $('#id_dekor').val();
                
                console.log(id_dekor);
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/CMember/deleteDekorasi",
                    dataType : "JSON",
                    data : {id:id_dekor,
                            tabelDb:tabelDb},

                    success: function(data){
                        console.log("berhasil");
                        $('[name="id_dekor"]').val("");
                        $('#Modal_Delete').modal('hide');
                        
                       refresh();
                        
                        // location.reload();
                    }
                });
                return false;
            });
            //END DELETE USER

            function refresh() {
            $("#mydata").DataTable().destroy();
            $('#show_dekor').empty();
            
            show();
            } 
        });
    </script>
</div>
<!-- END PAKAIAN -->

<!-- START UNDANGAN -->
<div class="container" id="undanganv" style="display:none">
    <h3>Data Undangan Member</h3>
    <table id="mydata" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Kategori Warna</th>
                <th>Kategori Jenis</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody id="show_undangan">
        
        </tbody>
    </table>


    <script type="text/javascript" >
        $(document).ready(function() {        
            show();    
            function show(){

                $.ajax({
                async :false,
                type  : 'ajax',
                url   : '<?php echo base_url();?>index.php/CMember/getUndangan',
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;

                    for(i=0; i<data.length; i++){
                    var tr = $('<tr>').append(
                        $('<td>').text(data[i].nama),
                        $('<td>').text(data[i].keterangan),
                        $('<td>').text(data[i].harga),
                        $('<td>').text(data[i].kat_warna),
                        $('<td>').text(data[i].kat_jenis),
                        $('<td>').text(data[i].image),
                    );
                    tr.appendTo('#show_undangan');
                    
                    }
                    // $(".table").DataTable({
                        
                    //     "lengthMenu": [[5,10,15,25,-1],[5,10,15,25,"Semua"]]
                        
                    // }); 
                                
                }
                });
            }
            // DELETE USER
            $('#show_dekor').on('click','.item_delete',function(){
                //  alert("TES");
                //  alert($(this).data('username'));

                //  Mengambil data json dari array
                var id = $(this).data('id');
                var nama = $(this).data('nama');
                 
                
                $('#Modal_Delete').modal('show');
                document.getElementById("namaUser").innerHTML=" Apakah anda yakin ingin menghapus '"+nama+"' ? ";
                
                
                $('[name="id_dekor"]').val(id);
            });
            //delete record to database
             $('#btn_delete').on('click',function(){
                var id_dekor = $('#id_dekor').val();
                
                console.log(id_dekor);
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/CMember/deleteDekorasi",
                    dataType : "JSON",
                    data : {id:id_dekor,
                            tabelDb:tabelDb},

                    success: function(data){
                        console.log("berhasil");
                        $('[name="id_dekor"]').val("");
                        $('#Modal_Delete').modal('hide');
                        
                       refresh();
                        
                        // location.reload();
                    }
                });
                return false;
            });
            //END DELETE USER

            function refresh() {
            $("#mydata").DataTable().destroy();
            $('#show_dekor').empty();
            
            show();
            } 
        });
    </script>
</div>
<!-- END UNDANGAN -->

<!-- START DOKUMENTASI -->
<div class="container" id="dokumentasiv" style="display:none">
    <h3>Data DOKUMENTASI Member</h3>
    <table id="mydata" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Kategori Warna</th>
                <th>Kategori Jenis</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody id="show_dokumentasi">
        
        </tbody>
    </table>


    <script type="text/javascript" >
        $(document).ready(function() {        
            show();    
            function show(){

                $.ajax({
                async :false,
                type  : 'ajax',
                url   : '<?php echo base_url();?>index.php/CMember/getDokumentasi',
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;

                    for(i=0; i<data.length; i++){
                    var tr = $('<tr>').append(
                        $('<td>').text(data[i].nama),
                        $('<td>').text(data[i].keterangan),
                        $('<td>').text(data[i].harga),
                        $('<td>').text(data[i].kat_warna),
                        $('<td>').text(data[i].kat_jenis),
                        $('<td>').text(data[i].image),
                    );
                    tr.appendTo('#show_dokumentasi');
                    
                    }     
                    // $(".table").DataTable({
                        
                    //     "lengthMenu": [[5,10,15,25,-1],[5,10,15,25,"Semua"]]
                        
                    // });                            
                }
                });
            }
            // DELETE USER
            $('#show_dekor').on('click','.item_delete',function(){
                //  alert("TES");
                //  alert($(this).data('username'));

                //  Mengambil data json dari array
                var id = $(this).data('id');
                var nama = $(this).data('nama');
                 
                
                $('#Modal_Delete').modal('show');
                document.getElementById("namaUser").innerHTML=" Apakah anda yakin ingin menghapus '"+nama+"' ? ";
                
                
                $('[name="id_dekor"]').val(id);
            });
            //delete record to database
             $('#btn_delete').on('click',function(){
                var id_dekor = $('#id_dekor').val();
                
                console.log(id_dekor);
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/CMember/deleteDekorasi",
                    dataType : "JSON",
                    data : {id:id_dekor,
                            tabelDb:tabelDb},

                    success: function(data){
                        console.log("berhasil");
                        $('[name="id_dekor"]').val("");
                        $('#Modal_Delete').modal('hide');
                        
                       refresh();
                        
                        // location.reload();
                    }
                });
                return false;
            });
            //END DELETE USER

            function refresh() {
            $("#mydata").DataTable().destroy();
            $('#show_dekor').empty();
            
            show();
            } 
        });
    </script>
</div>
<!-- END DOKUMENTASI -->

<!-- START SOUVENIR -->
<div class="container" id="souvenirv" style="display:none">
    <h3>Data Souvenir Member</h3>
    <table id="mydata" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Kategori Warna</th>
                <th>Kategori Jenis</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody id="show_souvenir">
        
        </tbody>
    </table>


    <script type="text/javascript" >
        $(document).ready(function() {        
            show();    
            function show(){

                $.ajax({
                async :false,
                type  : 'ajax',
                url   : '<?php echo base_url();?>index.php/CMember/getSouvenir',
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;

                    for(i=0; i<data.length; i++){
                    var tr = $('<tr>').append(
                        $('<td>').text(data[i].nama),
                        $('<td>').text(data[i].keterangan),
                        $('<td>').text(data[i].harga),
                        $('<td>').text(data[i].kat_warna),
                        $('<td>').text(data[i].kat_jenis),
                        $('<td>').text(data[i].image),
                    );
                    tr.appendTo('#show_souvenir');
                    
                    }
                    // $(".table").DataTable({
                        
                    //     "lengthMenu": [[5,10,15,25,-1],[5,10,15,25,"Semua"]]
                        
                    // }); 
                                
                }
                });
            }
            // DELETE USER
            $('#show_dekor').on('click','.item_delete',function(){
                //  alert("TES");
                //  alert($(this).data('username'));

                //  Mengambil data json dari array
                var id = $(this).data('id');
                var nama = $(this).data('nama');
                 
                
                $('#Modal_Delete').modal('show');
                document.getElementById("namaUser").innerHTML=" Apakah anda yakin ingin menghapus '"+nama+"' ? ";
                
                
                $('[name="id_dekor"]').val(id);
            });
            //delete record to database
             $('#btn_delete').on('click',function(){
                var id_dekor = $('#id_dekor').val();
                
                console.log(id_dekor);
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/CMember/deleteDekorasi",
                    dataType : "JSON",
                    data : {id:id_dekor,
                            tabelDb:tabelDb},

                    success: function(data){
                        console.log("berhasil");
                        $('[name="id_dekor"]').val("");
                        $('#Modal_Delete').modal('hide');
                        
                       refresh();
                        
                        // location.reload();
                    }
                });
                return false;
            });
            //END DELETE USER

            function refresh() {
            $("#mydata").DataTable().destroy();
            $('#show_dekor').empty();
            
            show();
            } 
        });
    </script>
</div>
<!-- END SOUVENIR -->

<!-- START CATERING -->
<div class="container" id="cateringv" style="display:none">
    <h3>Data Catering Member</h3>
    <table id="mydata" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Kategori Warna</th>
                <th>Kategori Jenis</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody id="show_catering">
        
        </tbody>
    </table>


    <script type="text/javascript" >
        $(document).ready(function() {        
            show();    
            function show(){

                $.ajax({
                async :false,
                type  : 'ajax',
                url   : '<?php echo base_url();?>index.php/CMember/getCatering',
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;

                    for(i=0; i<data.length; i++){
                    var tr = $('<tr>').append(
                        $('<td>').text(data[i].nama),
                        $('<td>').text(data[i].keterangan),
                        $('<td>').text(data[i].harga),
                        $('<td>').text(data[i].kat_warna),
                        $('<td>').text(data[i].kat_jenis),
                        $('<td>').text(data[i].image),
                    );
                    tr.appendTo('#show_catering');
                    
                    }
                    $(".table").DataTable({
                        
                        "lengthMenu": [[5,10,15,25,-1],[5,10,15,25,"Semua"]]
                        
                    }); 
                                
                }
                });
            }
            // DELETE USER
            $('#show_dekor').on('click','.item_delete',function(){
                //  alert("TES");
                //  alert($(this).data('username'));

                //  Mengambil data json dari array
                var id = $(this).data('id');
                var nama = $(this).data('nama');
                 
                
                $('#Modal_Delete').modal('show');
                document.getElementById("namaUser").innerHTML=" Apakah anda yakin ingin menghapus '"+nama+"' ? ";
                
                
                $('[name="id_dekor"]').val(id);
            });
            //delete record to database
             $('#btn_delete').on('click',function(){
                var id_dekor = $('#id_dekor').val();
                
                console.log(id_dekor);
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/CMember/deleteDekorasi",
                    dataType : "JSON",
                    data : {id:id_dekor,
                            tabelDb:tabelDb},

                    success: function(data){
                        console.log("berhasil");
                        $('[name="id_dekor"]').val("");
                        $('#Modal_Delete').modal('hide');
                        
                       refresh();
                        
                        // location.reload();
                    }
                });
                return false;
            });
            //END DELETE USER

            function refresh() {
            $("#mydata").DataTable().destroy();
            $('#show_dekor').empty();
            
            show();
            } 
            
        });
    </script>
</div>
<!-- END CATERING -->

</div>
