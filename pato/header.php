<?php require_once($abs_us_root.$us_url_root.'users/includes/template/header1_must_include.php'); ?>

<!-- Bootstrap 3 Glyphicons for Compatibility Reasons -->
<?php require_once($abs_us_root.$us_url_root.'usersc/templates/'.$settings->template.'/assets/fonts/glyphicons.php'); ?>

<!-- Table Sorting and Such -->
<link href="<?=$us_url_root?>users/css/datatables.css" rel="stylesheet">

<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/css/main.css">
<!--===============================================================================================-->

<!-- jQuery Fallback -->
<script type="text/javascript">
if (typeof jQuery == 'undefined') {
  document.write(unescape("%3Cscript src='<?=$us_url_root?>users/js/jquery.js' type='text/javascript'%3E%3C/script%3E"));
}
</script>
<?php
//optional
if(file_exists($abs_us_root.$us_url_root.'usersc/templates/'.$settings->template.'.css')){?> <link href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>.css" rel="stylesheet"> <?php } ?>

</head>
<?php require_once($abs_us_root.$us_url_root.'users/includes/template/header3_must_include.php'); ?>
