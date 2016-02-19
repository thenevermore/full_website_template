<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: THENEVERMORE
 * Date: 2/18/2016
 * Time: 2:38 PM
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ariansyah Nurhadi">
    <title>Document</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>my-assets/sb-admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=base_url()?>my-assets/sb-admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?=base_url()?>my-assets/sb-admin/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>my-assets/sb-admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=base_url()?>my-assets/sb-admin/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url()?>my-assets/sb-admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Silakan Log In terlebih dahulu</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo base_url('login/do_login')?>" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="ID Petugas" name="idpetugas" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" class="btn btn-lg btn-info btn-block">
                        </fieldset>
                    </form>
                    <?php if($this->session->flashdata('flashSuccess')):?>
                        <p class='flashMsg flashSuccess'> <?=$this->session->flashdata('flashSuccess')?> </p>
                    <?php endif ?>
                    <?php if($this->session->flashdata('flashError')):?>
                        <p class='flashMsg flashError'> <?=$this->session->flashdata('flashError')?> </p>
                    <?php endif ?>
                    <?php if($this->session->flashdata('flashInfo')):?>
                        <p class='flashMsg flashInfo'> <?=$this->session->flashdata('flashInfo')?> </p>
                    <?php endif ?>
                    <?php if($this->session->flashdata('flashWarning')):?>
                        <p class='flashMsg flashWarning'> <?=$this->session->flashdata('flashWarning')?> </p>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="<?=base_url()?>my-assets/sb-admin/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url()?>my-assets/sb-admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?=base_url()?>my-assets/sb-admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<!--<script src="../bower_components/raphael/raphael-min.js"></script>
<script src="../bower_components/morrisjs/morris.min.js"></script>
<script src="../js/morris-data.js"></script>-->

<!-- Custom Theme JavaScript -->
<script src="<?=base_url()?>my-assets/sb-admin/dist/js/sb-admin-2.js"></script>
</body>
</html>
