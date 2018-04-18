<?php 
session_start();
if (empty($_SESSION['login_user'])){
	header("location: /");
} else {
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MFS Hải Phòng - Chương trình CSKH</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet" />
    <link href="css/floatexamples.css" rel="stylesheet" type="text/css" /> 
    <link href="css/bootstrap-slider.css" rel="stylesheet" type="text/css" />
    <!-- select2 -->
    <link href="css/select/select2.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
<body class="nav-md">
    <div class="container body">
		<div class="main_container">
			<?php 
			 include("layout/menu_left.php");
			 include("layout/menu_top.php");
			?>            
		</div>
		<!-- /top navigation -->
		<!-- page content -->
		<div class="right_col" role="main">
			<!-- top tiles -->
			
			<!-- /top tiles -->
                        <!-- Lựa chọn chương trình -->
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                    include 'layout/lo_chonCTKS.php';
                                ?>
                            </div>
			</div>
                        <!-- Lựa chọn chương trình  -->
                        <!-- Lựa chọn kịch bản khảo sát -->
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                    include 'layout/lo_chonkichbanKS.php';
                                ?>
                            </div>
			</div>
                        <!-- Lựa chọn khảo sát  -->
			<div class="row">
                            <div class="col-md-4">
                                <?php
                                    include 'layout/lo_danhsachHGL.php';
                                    include 'layout/lo_danhsachKH.php';
                                ?>
                                
                            </div>
                            <div class="col-md-8">
                                <?php
                                    include 'layout/lo_thongtinKH.php';
                                    include 'layout/lo_lichsuKS.php';
                                ?>
                                
                            </div>
			</div>
			<!-- footer content -->
			<footer>
				<div class="">
					<p class="pull-right">Thiết kế bởi <a>MFS Hải Phòng</a>. |
						<span class="lead"> <i class="fa fa-paw"></i> 
						<img src="images/logo.png" height="25" width="auto" alt="Chi nhánh Mobifone Service Hải Phòng">
						</span>
					</p>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>		
	</div>
	<script src="js/bootstrap.min.js"></script>
        <!-- input mask -->
        <script src="js/input_mask/jquery.inputmask.js"></script>
        <!-- icheck -->
        <script src="js/icheck/icheck.min.js"></script> 
        <script src="js/custom.js"></script>
        <!-- select2 -->
	<script src="js/select/select2.full.js"></script>
</body>
<?php 
}