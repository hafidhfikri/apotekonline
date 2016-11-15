<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="<?=base_url('assets/plugins/bootstrap/bootstrap.css')?>" type="text/css" />
    <link rel="stylesheet" href="<?=base_url('assets/plugins/bootstrap/bootstrap-responsive.css')?>" type="text/css" />
    <link rel="stylesheet" href="<?=base_url('assets/css/reg.css')?>" type="text/css" />
    <!-- js -->
    <script type="text/javascript" src="<?=base_url('assets/plugins/bootstrap/jquery-3.1.1.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/plugins/bootstrap/bootstrap.js')?>"></script>

    <style type="text/css">
        .login{
            padding-top: 65px;
        }
        .center{
            float: none;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body style=" background-color: #F7F7F6;">

<!-- Main Container -->
<section>
    <div class="container login">
        <div class="row ">
            <div class="center span5 well form-group">
                <legend>Silahkan Log In</legend>
                <?php
                if ($msg==1) {
                    ?>
                    <p class="bg-danger">Email atau password salah!</p>
                    <?php
                }
                ?>
                <form method="POST" action='<?php echo base_url();?>index.php/login/process' accept-charset="UTF-8" >
                    <input type="email" id="email" class="ex3 form-control" name="email" placeholder="Email" style="margin-left: 0px !important;margin-bottom: 5px;" />
                    <input type="password" id="password" class="ex3 form-control" name="password" placeholder="Password" style="margin-left: 0px !important;margin-bottom: 5px;" />
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
    <p class="text-center muted ">&copy; Copyright 2016 - Kawan Zulfikar</p>
</section>
<!-- Main Container Ends -->

</body>
</html>