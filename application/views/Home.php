<!DOCTYPE html>
<html lang="">
	<head 1">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="icon" href="#">
		<title>Nikahku</title>

		<!-- Bootstrap CSS -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
		<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>

		<!-- Custom -->
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/custom/home.css">

		<style >
		.background{
			background: #D69D4B; 
			font-size: 14px; 
			background-image: url(<?=base_url()?>assets/image/background.jpeg); 
			background-position: center;
			/* background-repeat: no-repeat; //gambar hanya 1 */
			background-attachment: fixed; //gambar tidak berubah
			background-size: cover;
			position: relative;
		}
		img {
			 /* border: 1px solid #ddd; */
			/* border-radius: 4px; */
			/* padding: 5px; */
			/* width: 150px; */
			opacity: 0.6;
   			filter: alpha(opacity=40); /* For IE8 and earlier */
		}

		img:hover {
			box-shadow: 0 0 20px 1px rgba(0, 140, 186, 0.5);
			opacity: 0.9;
		}
		.pading {
			padding : 30px;
		}
		</style>
		
	</head>


	<body class="background pading" style="zoom:100%">
		
		<br><br><br>
		<div class="container">

			<div class="row">
				<div class="col-8" >
					<!-- <div class="col border card size" > -->
					
					<a href="<?=base_url()?>index.php/CHome/kategori/dekorasi"><img src="<?=base_url()?>assets/image/dekorasi.png" class="col size" alt="Catering" ></a>
						
						
					<!-- </div> -->
				</div>
				<div class="col" >
					<!-- <div class="col border card size" > -->
					
					<a href="<?=base_url()?>index.php/CHome/kategori/catering"><img src="<?=base_url()?>assets/image/catering.png" class="col size" alt="Catering" > </a>
					<!-- <img src="<?=base_url()?>assets/image/catering.png" class="img-thumbnail col border size" alt="Catering" >  -->
					<!-- </div> -->
				</div>
			</div>

			<div class="row">
				<div class="col-4 ">
					<!-- <div class="row-1 border card size2 space"> -->
					<a href="<?=base_url()?>index.php/CHome/kategori/pakaian"><img src="<?=base_url()?>assets/image/pakaian.png" class="col  size2 space" alt="Pakaian" ></a>
						
					<!-- </div> -->
				</div>
				<div class="col">
					<div class="col size space">
						LOGO Website
					</div>
					<!-- <div class="col border card size space"> -->
					<a href="<?=base_url()?>index.php/CHome/kategori/souvenir"><img src="<?=base_url()?>assets/image/souvenir.png" class="col  size space" alt="Souvenir" ></a>
					<!-- </div> -->
				</div>
				<div class="col">
					<!-- <div class="col border card size space"> -->
					<a href="<?=base_url()?>index.php/CHome/kategori/undangan"><img src="<?=base_url()?>assets/image/undangan.png" class="col  size space" alt="Undangan" ></a>
					<!-- </div> -->
					<!-- <div class="col border card size space"> -->
					<a href="<?=base_url()?>index.php/CHome/kategori/dokumentasi"><img src="<?=base_url()?>assets/image/dokumentasi.png" class="col  size space" alt="Dokumentasi" ></a>
					<!-- </div> -->
				</div>
			</div>
		</div>



		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>	

	</body>
</html>