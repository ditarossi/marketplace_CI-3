<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    <br/>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Caring Skin Store</h2>
            </div>
            <div class="col">
                <ul class="nav nav-pills nav justify-content-end">
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/LandingPage/loginUser/')?>">Login User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/LandingPage/loginAdmin/')?>">Login Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col">
				
            </div>
            <div class="col">
                <section>
                    <h2>Halaman Login</h2>
                    <?php echo form_open('LandingPage/prosesAdmin');?>
                        <p>Username:</p>
                        <p><input class="form-control" type="text" name="Username" value="<?php echo set_value('Username'); ?>"/></p>
                        <p> <?php echo form_error('Username'); ?> </p>

                        <p>Password:</p>
                        <p><input class="form-control" type="Password" name="Password" value="<?php echo set_value('Password'); ?>"/></p>
                        <p> <?php echo form_error('Password'); ?> </p>

                        <p><input class="btn btn-primary" type="submit" name="Login" value="Login" /></p>

                    <?php echo form_close();?>
                    
                </section>
            </div>
            <div class="col">
				
            </div>
        </div>
    </div>
    <br/>
</body>
</html>