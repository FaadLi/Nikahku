
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- no additional media querie or css is required -->
<div class="container">
    <div class="row justify-content-center align-items-center" style="height:100vh">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                    <h1 class="text-center"><?php echo $page_title; ?></h1>
                        <label>Login Admin</label>
                    </div>

                    <?php echo form_open('CLogin/loginAdmin'); ?>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>