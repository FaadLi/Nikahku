<!DOCTYPE html>
<html lang="">
	<head 1">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="icon" href="#">
		<title>Nikahku</title>

		<style>
			.size{
				height:200px;
				text-align: center;
				
			}
			.size2{
				height:430px;
				text-align: center;
			}
			.space{
				margin-top:30px;
			}
			.footer {
				position: ;
				left: 0;
				bottom: 0;
				width: 100%;
				color: black;
				text-align: center;
				margin-top:70px;
				}
		</style>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
		<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style_home.css">
		
	</head>


	<body style="background: #ff9999; font-size: 14px;">
		
		<br><br><br>
		<div class="container">

			<div class="row" style="align:center">
				<div class="col-8" >
					<div class="col border card size" >
						<h1><b>Box 1</b></h1>
						
						
					</div>
				</div>
				<div class="col" >
					<!-- <div class="col border card size" > -->
					
					<img src="<?=base_url()?>assets/image/catering.png" class="col card size" alt="Catering" > 
					<!-- <img src="<?=base_url()?>assets/image/catering.png" class="img-thumbnail col border size" alt="Catering" >  -->
					<!-- </div> -->
				</div>
			</div>

			<div class="row">
				<div class="col-4 ">
					<div class="row-1 border card size2 space">
						1
						
					</div>
				</div>
				<div class="col">
					<div class="col size space">
						Kosong
					</div>
					<div class="col border card size space">
						3 of 3
					</div>
				</div>
				<div class="col">
					<div class="col border card size space">
						2 of 3
					</div>
					<div class="col border card size space">
						3 of 3
					</div>
				</div>
			</div>
		</div>


		<div class="jumbotron text-center footer" style="margin-bottom:-10px">
			<p>Footer</p>
		</div>

		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>	

	</body>
</html>