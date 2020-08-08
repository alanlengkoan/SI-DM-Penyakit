<?php
// apabila admin belum login
if ($user['level'] != 'admin') {
  redirect('masuk/masuk?&masuk');
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sistem Informasi Data Mining</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap/css/bootstrap.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/font-awesome.min.css">
  <!-- animate CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/animate.css">
  <!-- meanmenu icon CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/meanmenu.min.css">
  <!-- main CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/main.css">
  <!-- alert CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/alerts.css">
  <!-- form CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/form/all-type-forms.css">
  <!-- morrisjs CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/morrisjs/morris.css">
  <!-- metisMenu CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/metisMenu/metisMenu.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/metisMenu/metisMenu-vertical.css">
  <!-- style CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">
  <!-- responsive CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/responsive.css">
  <!-- buttons CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/buttons/buttons.css">
  <!-- dataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/dataTables/datatables.min.css">  

</head>
<body>
