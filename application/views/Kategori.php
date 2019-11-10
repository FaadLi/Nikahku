<!DOCTYPE html>
<html lang="">
	<head 1">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="icon" href="#">
		<title>Nikahku</title>

        <!-- Bootstrap CSS -->
        
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
		<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/holder.js"></script>
        <!-- Online -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Custom -->
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/custom/home.css">
		

        <style>
           
            * {
            box-sizing: border-box;
            }

            form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #f1f1f1;
            }

            form.example button {
            float: left;
            width: 20%;
            padding: 10px;
            background: #2196F3;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
            }

            form.example button:hover {
            background: #0b7dda;
            }

            form.example::after {
            content: "";
            clear: both;
            display: table;
            }
            
            a:link, a:visited {
            background-color: white;
            color: black;
            padding: 14px 25px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            }

            a:hover, a:active {
             background-color: #f2f2f2; */
            }
        </style>

	</head>

	<body style="background:#ff8 ; font-size: 14px;">
<!-- #ff9999 -->
    <div  >
        <div class="" style="background: #fff; ">
        <br><br><br>
            <h1 class="text-center"> Ini Kategori yang dicari </h1>
            <div class="search-container">
                <form class="example" action="/action_page.php" style="margin:auto;max-width:800px">
                    <input type="text" placeholder="Search.." name="search2">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <hr><hr>
        </div>
        

        <div class="container">
        <div class="row text-center">
        <?php
            // Kita looping data dari controller
            foreach ($categories as $key) :
        ?>
        <div class="container col-md-4" >
        <br><br>
            <div class="card-deck ">
                <a href="#" class="card mb-4 box-shadow border-0">
                    <img class="card-img-top" src="holder.js/200x150?auto=yes&text=foto <?php echo ($key->nama) ?>" alt="<?php echo ($key->nama) ?>">
                    
                    <div class="card-body">
                    
                        <h4 class="card-title"><?php echo ($key->nama) ?></h4>
                        <hr>
                        <p class="card-text"><?php echo ($key->keterangan) ?></p>
                    </div>
                    <div class="card-footer text-right">
                        <small class="text-muted "><?php echo ($key->tampstamp) ?></small>
                    </div>
                </a> 
            </div>
        </div>
        <?php endforeach; ?>
        </div>
        </div>

    </div>
    <div>
        

    </div>
    
    
 
        
 
 
        <!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>	

	</body>
</html>