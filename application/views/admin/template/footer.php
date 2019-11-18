        </div>
    </div>   
   
    <script type="text/javascript">

        // Menu Member sidebar
        document.getElementById("sb_home").addEventListener("click",home);
        document.getElementById("sb_member").addEventListener("click",member);
        document.getElementById("sb_kategori").addEventListener("click",kategori);
        document.getElementById("sb_pesan").addEventListener("click",pesan);

        function home(){
            document.getElementById("sb_homev").style.display="block";
            document.getElementById("sb_memberv").style.display="none";
            document.getElementById("sb_kategoriv").style.display="none";
            document.getElementById("sb_pesanv").style.display="none";
        }
        function member(){
            document.getElementById("sb_homev").style.display="none";
            document.getElementById("sb_memberv").style.display="";
            document.getElementById("sb_kategoriv").style.display="none";
            document.getElementById("sb_pesanv").style.display="none";
        }
        
        function kategori(){    
            document.getElementById("sb_homev").style.display="none";
            document.getElementById("sb_memberv").style.display="none";
            document.getElementById("sb_kategoriv").style.display="";
            document.getElementById("sb_pesanv").style.display="none";
        }
        function pesan(){
            document.getElementById("sb_homev").style.display="none";
            document.getElementById("sb_memberv").style.display="none";
            document.getElementById("sb_kategoriv").style.display="none";
            document.getElementById("sb_pesanv").style.display="";
        }
    </script>


    <!-- Jquery JS-->
    <script src="<?php echo base_url() ?>assets/admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url() ?>assets/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url() ?>assets/admin/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url() ?>assets/admin/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url() ?>assets/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url() ?>assets/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url() ?>assets/admin/js/main.js"></script>

</body>

</html>
<!-- end document-->