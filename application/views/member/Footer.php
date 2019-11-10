    <script type="text/javascript">

    // menambahkan variabel buat mengambil tabel Database
    var tabelDb = "";

      // Menu Member sidebar
      document.getElementById("home").addEventListener("click",home);
      document.getElementById("profil").addEventListener("click",profil);
      document.getElementById("kategori").addEventListener("click",kategori);
      document.getElementById("datatabel").addEventListener("click",datatabel);

      function home(){
        document.getElementById("homev").style.display="";
        document.getElementById("profilv").style.display="none";
        document.getElementById("kategoriv").style.display="none";
        document.getElementById("datatabelv").style.display="none";
      }
      function profil(){
        document.getElementById("homev").style.display="none";
        document.getElementById("profilv").style.display="";
        document.getElementById("kategoriv").style.display="none";
        document.getElementById("datatabelv").style.display="none";
      }
      
      function kategori(){
        document.getElementById("homev").style.display="none";
        document.getElementById("profilv").style.display="none";
        document.getElementById("kategoriv").style.display="";
        document.getElementById("datatabelv").style.display="none";
      }
      function datatabel(){
        document.getElementById("homev").style.display="none";
        document.getElementById("profilv").style.display="none";
        document.getElementById("kategoriv").style.display="none";
        document.getElementById("datatabelv").style.display="block";
        
        
        tabelDb = "dekorasi";

        console.log(tabelDb);

      }
      //End Menu Member sidebar



      
      
      

      

    </script>
    <!-- Bootstrap core JavaScript -->

    <script src="<?php echo base_url() ?>assets/admin/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/admin/js/jquery.easing.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url() ?>assets/admin/js/resume.min.js"></script>
    <script type="text/javascript" src='<?php echo base_url() ?>assets/admin/js/admin.js'></script>
  </body>
</html>
