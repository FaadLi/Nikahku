

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
                    );
                    tr.appendTo('#show_dekor');
                    
                    }
                    // $(".table").DataTable({
                        
                    //     "lengthMenu": [[5,10,15,25,-1],[5,10,15,25,"Semua"]]
                        
                    // }); 
                                
                }
                });
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
        });
    </script>
</div>
<!-- END CATERING -->

</div>
