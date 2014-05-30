<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Please sign in | Greater Traveler</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="canonical" href="<?php echo base_url(); ?>login" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sb-admin.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/app.css" media="screen" />
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" type="image/x-ico">
		<link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" type="image/x-ico">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/cross_browser/webkit.css" media="screen" />
		<!--[if IE 6]><link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/cross_browser/ie6.css" media="screen" /><![endif]-->
		<!--[if IE 7]><link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/cross_browser/ie7.css" media="screen" /><![endif]-->
		<!--[if IE 8]><link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/cross_browser/ie8.css" media="screen" /><![endif]-->
		<!--[if IE 9]><link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/cross_browser/ie9.css" media="screen" /><![endif]-->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/sb-admin.js"></script>
		<!--[if lt IE 9]><script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<script type="text/javascript">
</script>
    </head>

    <body class="login">

        <div id="wrapper">
            
<?php echo form_open('login', array('class' => 'form-signin')) ?>


<img src="<?php echo base_url(); ?>assets/upload/logo-small.jpg" class="img-responsive img-center" alt="Greater Traveler" width="200">

<p class="small-text">Login to update the Greater Travelers Rest Chamber of Commerce mobile app.</p>

<p>
    <?php echo $message ?>
</p>

<div class="<?php echo (form_error('identity')) ? 'error' : '' ?> form-group">
    
        <label for="identity" class="control-label"></label>
        <div class="">
            <?php echo form_input($identity) ?>
            <?php echo form_error('identity') ?>
        </div>
    
</div>
<div class="<?php echo (form_error('password')) ? 'error' : '' ?> form-group">
    
        <div class="">
            <?php echo form_input($password) ?>
            <?php echo form_error('password') ?>
        </div>
    
</div>

<div class="">
    <button id="btn_submit" class="btn tn-larbge btn-success btn-block" type="submit">Log In</button>
</div>

<div class="checkbox">
    <label class="cb_rememberme">
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"') ?> Keep me logged in
    </label>
</div>

<?php echo form_close() ?>

 </div> <!-- /wrapper -->

    </body>
</html>
