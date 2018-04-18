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
	<!-- Custom styling plus plugins -->
    <link href="css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">
		<!-- editor -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="css/editor/index.css" rel="stylesheet">
    <!-- select2 -->
	<link href="css/select/select2.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
</head>
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
			<div class="row tile_count">
				<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
					<div class="right">
						<span class="count_top"></span>
						<div class="count"></div>
						<span class="count_bottom"></span>
					</div>
				</div>
				<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
					<div class="right">
						<span class="count_top"></span>
						<div class="count"></div>
						<span class="count_bottom"></span>
					</div>
				</div>
				<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
					<div class="right">
						<span class="count_top"></span>
						<div class="count"></div>
						<span class="count_bottom"></span>
					</div>
				</div>
				<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
					<div class="right">
						<span class="count_top"></span>
						<div class="count"></div>
						<span class="count_bottom"></span>
					</div>
				</div>
				<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
					<div class="right">
						<span class="count_top"></span>
						<div class="count"></div>
						<span class="count_bottom"></span>
					</div>
				</div>
				<div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
					<div class="left"></div>
					<div class="right">
						<span class="count_top"><center><i class="fa fa-user"></i> Tổng số khách hàng</center></span>
						<div class="count"><center><div id="total_customer"></div></center></div>
						<span class="count_bottom"><center><i class="green">4% </i> From last Week</center></span>
					</div>
				</div>
			</div>
			<!-- /top tiles -->
			<div class="row">
				<div class="col-md-12">
					<div class="x_panel">
						<div class="x_title">
							<div style="float:left">
								<h2> Dữ liệu khách hàng <small> Cập nhật thông tin</small></h2>
							</div>
							<div style="float:right">
								<button id="capnhatthongtin" type="button" class="btn btn-success btn-sm">Cập nhật thông tin</button>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="col-md-4 col-sm-4 col-xs-4">
								<input id="iduser" type="text" class="form-control" placeholder="<?echo $_SESSION['login_user']?>" ReadOnly>
								<span class="fa fa-user-md form-control-feedback right" aria-hidden="true"></span>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4">
								<input id="sodienthoai" type="text" class="form-control" placeholder="Số thuê bao">
								<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4" style="text-align:center;padding-top:0px;">
								<div id="idcode"></div>
							</div>     
						</div>
						<div class="x_content">
							<div class="col-md-4 col-sm-4 col-xs-4">
								<input id="hoten" type="text" class="form-control" placeholder="Họ và Tên">
								<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4">
								<input id="ngaysinh" type="text" class="form-control" data-inputmask="'mask': '99/99/9999'" placeholder="Sinh nhật">
								<span class="fa fa-birthday-cake form-control-feedback right" aria-hidden="true"></span>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4" style="text-align:center;padding-top:6px;">
								Nam  
								<input type="radio" class="flat" name="gender" id="genderM" value="1" checked="" required /> 
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								Nữ 
								<input type="radio" class="flat" name="gender" id="genderF" value="0" />
							</div>     
						</div>
						<div class="x_content">
							<div class="col-md-4 col-sm-4 col-xs-4">
								<input id="diachi" type="text" class="form-control" placeholder="Địa chỉ thuê bao">
								<span class="fa fa-home form-control-feedback right" aria-hidden="true"></span>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4">
								<input id="cmnd" type="text" class="form-control" placeholder="Số CMND/CCCD">
								<span class="fa fa-credit-card form-control-feedback right" aria-hidden="true"></span>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4">
								<input id="nghenghiep" type="text" class="form-control" placeholder="Thông tin nghề nghiệp (nếu có)">
								<span class="fa fa-university form-control-feedback right" aria-hidden="true"></span>
							</div>     
						</div>
						<?php
							//if (trim($_SESSION['login_user']) == 'phuongvb')  {
						?>
						<div class="x_content">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<select class="select2_single form-control" tabindex="-1" id="tinhthanh">
									<option></option>
									<option value="31">Hải Phòng</option>
									<option value="22">Quảng Ninh</option>
								</select>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<select class="select2_single form-control" tabindex="-1" id="quanhuyen">
								</select>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<select class="select2_single form-control" tabindex="-1" id="phuongxa">
								</select>
							</div>  
						</div>
						<?php
							//}
						?>
						<div class="x_content">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                <th><center>Số thuê bao</center></th>
                                                <th><center>Họ tên</center></th>
                                                <th><center>Địa chỉ</center></th>
                                                <th><center>Phường/Xã</center></th>
                                                <th><center>Quận/Huyện</center></th>
                                                <th><center>Tỉnh/Thành</center></th>
                                            </tr>
                                        </thead>
						<?php
							$today = date("Y-m-d");
							if (trim($_SESSION['login_user']) == 'phuongvb')  {
								$sql_string_temp = "Select * from tblcustomer where ngaycapnhat like '".$today." %' ORDER BY tblcustomer.ngaycapnhat DESC";
							} else {
								$sql_string_temp = "Select * from tblcustomer where nguoicapnhat='".$_SESSION['login_user']."' and ngaycapnhat like '".$today." %' order by ngaycapnhat DESC";
							}
								$sql_temp = $mysqli->query($sql_string_temp);
								if ($sql_temp->num_rows <> 0) {
						?>
                                        <tbody>
                                        	<?php
                                        		$dem = 1;
                                        		while($obj = $sql_temp->fetch_object()) {
                                        	?>
                                            <tr class="even pointer">
                                                <td class=" "><center><?php echo $obj->sodienthoai;?></center></td>
                                                <td class="col-md-2 col-sm-2 col-xs-12"><?php echo $obj->hoten;?></td>
                                                <td class=""><div class="limit_txt"><?php echo $obj->diachi;?></div></td>
                                                <td class=" "><center>
                                                	<?php 
													$sql_str_tmp = "select name from tblphuongxa where xaid = '".$obj->xaid."'";
													$sql_tmp = $mysqli->query($sql_str_tmp);
													if ($sql_tmp->num_rows <> 0) {
														$obj_tmp = $sql_tmp->fetch_object();
														$show_string = str_replace("Phường ", "" ,$obj_tmp->name);
														$show_string = str_replace("Xã ","",$show_string);
														echo $show_string;
													} else {
													echo ("None");
													}
													?>
                                                </center></td>
                                                <td class="a-right a-right "><center>
													<?php 
													$sql_str_tmp = "select name from tblquanhuyen where maqh = '".$obj->maqh."'";
													$sql_tmp = $mysqli->query($sql_str_tmp);
													if ($sql_tmp->num_rows <> 0) {
														$obj_tmp = $sql_tmp->fetch_object();
														$show_string = str_replace("Quận ", "" ,$obj_tmp->name);
														$show_string = str_replace("Huyện ","",$show_string);
														$show_string = str_replace("Thị xã ","",$show_string);
														echo $show_string;
													} else {
													echo ("None");
													}
													?>
                                                </center></td>
                                                <td class="a-right a-right ">
													<?php 
													$sql_str_tmp = "select name from tbltinhthanh where matp = '".$obj->matp."'";
													$sql_tmp = $mysqli->query($sql_str_tmp);
													if ($sql_tmp->num_rows <> 0) {
														$obj_tmp = $sql_tmp->fetch_object();
														echo $obj_tmp->name;
													} else {
													echo ("None");
													}
													?>
                                                </td>
                                            </tr>
                                            <?php
                                            	$dem = $dem + 1;
                                            	}
                                            ?>
                                        </tbody>
						<?php
							}
						?>
                                    </table>
                                </div>
					</div>
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
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="js/moment.min2.js"></script>
    <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- easypie -->
    <script src="js/easypie/jquery.easypiechart.min.js"></script>
    <script src="js/bootstrap-slider.js"></script>
    
    <!-- richtext editor -->
	<script src="js/editor/bootstrap-wysiwyg.js"></script>
	<script src="js/editor/external/jquery.hotkeys.js"></script>
	<script src="js/editor/external/google-code-prettify/prettify.js"></script>
	<!-- dropzone -->
    <script src="js/dropzone/dropzone.js"></script>
	<!-- select2 -->
	<script src="js/select/select2.full.js"></script>
	<script>
		$(document).ready(function () {
			$(".select2_single").select2({
				placeholder: "Chọn một địa điểm",
				allowClear: false
			});
			$("#tinhthanh").change(function(e) { // select element changed
				id = $("#tinhthanh").val();
				data = {};
				$.post('module/reload_quanhuyen.php?id='+id,'', function(data){		
					$("#quanhuyen").html(data);		
				});
			});
			$("#quanhuyen").change(function(e) { // select element changed
				id = $("#quanhuyen").val();
				data = {};
				$.post('module/reload_phuongxa.php?id='+id,'', function(data){		
					$("#phuongxa").html(data);		
				});
			});
		});
	</script>
	<!-- input_mask -->
    <script>
        $(document).ready(function () {
            $(":input").inputmask();
        });
        $(document).ready(function () {
        	//
			$.ajaxSetup({ cache: false }); // This part addresses an IE bug.  without it, IE will only load the first number and will never refresh
			data = {};
			$.post('module/reload_div.php','', function(data){		
				$("#total_customer").html(data);		
			});
			setInterval(function() {
				data = {};
				$.post('module/reload_div.php','', function(data){		
					$("#total_customer").html(data);		
				});
			}, 3000); // Làm mới sau 3 giây!
        	$("#sodienthoai").focus();
        	var theCode = new Date().getTime();
    		$('#idcode').html('Mã khách hàng :<br /> <b>'+ theCode +'</b>');
    		$('#capnhatthongtin').on('click', function (e) {
    			$sodienthoai = $('#sodienthoai').val();
    			$hoten = $('#hoten').val();
    			$gioitinh = $('input[name=gender]:checked').val();   // 1 - Nam; 0 - Nữ
    			$ngaysinh = $('#ngaysinh').val();
    			$diachi = $('#diachi').val();
    			$cmnd = $('#cmnd').val();
    			$nghenghiep = $('#nghenghiep').val();
    			xaid = $("#phuongxa").val();
    			maqh = $("#quanhuyen").val();
    			matp = $("#tinhthanh").val();
				if (checkPhoneNumber($sodienthoai) == false)  {
					$("#sodienthoai").val('');
					$("#sodienthoai").attr('class', 'form-control parsley-error');
					$("#sodienthoai").attr("placeholder", "Số thuê bao không hợp lệ");
					$("#sodienthoai").focus();
				} else if ($hoten == '') {
					$("#hoten").val('');
					$("#hoten").attr('class', 'form-control parsley-error');
					$("#hoten").attr("placeholder", "Chưa điền thông tin họ tên");
					$("#hoten").focus();
				} else if (checkDate($ngaysinh) == false) {
					$("#ngaysinh").val('');
					$("#ngaysinh").attr('class', 'form-control parsley-error');
					alert ('Ngày sinh không hợp lệ (dd/mm/yyyy)');
					$("#ngaysinh").focus();
				} else if ($diachi == '') {
					$("#diachi").val('');
					$("#diachi").attr('class', 'form-control parsley-error');
					$("#diachi").attr("placeholder", "Chưa điền thông tin địa chỉ");
					$("#diachi").focus();
				} else if (matp == '') {
					$(".select2_single").select2({
						placeholder: "<red>Chưa có thông tin địa điểm</red>",
						containerCssClass : "error",
						allowClear: false
					});
				} else if (checkCMND($cmnd) == false) {
					$("#cmnd").val('');
					$("#cmnd").attr('class', 'form-control parsley-error');
					$("#cmnd").attr("placeholder", "Số CMND/Thẻ CCCD không hợp lệ");
					$("#cmnd").focus();
				} else {
					var links = "function/add_info.php?sodienthoai="+$sodienthoai+"&hoten="+$hoten+"&gioitinh="+$gioitinh+"&ngaysinh="+$ngaysinh+"&diachi="+$diachi+"&xaid="+xaid+"&maqh="+maqh+"&matp="+matp+"&cmnd="+$cmnd+"&nghenghiep="+$nghenghiep;
					data = {};
					$.post(links,'', function(data){
						console.log(data);
						if ($.trim(data) == "ERR100") { 
							$("#sodienthoai").val('');
							$("#sodienthoai").attr('class', 'form-control parsley-error');
							$("#sodienthoai").attr("placeholder", "Số thuê bao đã có trong CSDL");
							$("#sodienthoai").focus();	
						} else {
							window.location.href = 'main.php';	
						}				
					});
				}
    		});
    		$("#sodienthoai").change(function(e) { // select element changed
				$("#sodienthoai").attr('class', 'form-control');
			});
    		$("#hoten").change(function(e) { // select element changed
				$("#hoten").attr('class', 'form-control');
			});
			$("#ngaysinh").change(function(e) { // select element changed
				$("#ngaysinh").attr('class', 'form-control');
			});
			$("#diachi").change(function(e) { // select element changed
				$("#diachi").attr('class', 'form-control');
			});
			$("#cmnd").change(function(e) { // select element changed
				$("#cmnd").attr('class', 'form-control');
			});
        });
        function checkDate(date) {
        	var comp = date.split('/');
        	var d = parseInt(comp[0], 10);
			var m = parseInt(comp[1], 10);
			var y = parseInt(comp[2], 10);
			var date = new Date(y,m-1,d);
			if (date.getFullYear() == y && date.getMonth() + 1 == m && date.getDate() == d) {
				return true;
			} else {
				return false;
			}
        }
        function checkCMND(cmnd) {
        	if (cmnd != '' && cmnd.length >= 9)  {
        		var filter = /^[0-9-+]+$/;
        		if (filter.test(cmnd)) {
        			return true;
        		}  
        		else {
        			return false;
        		}
        	}  
        	else {
        		return false;
        	}
        }
        function checkPhoneNumber(phone) {
			phone = phone.replace('(+84)', '');
			phone = phone.replace('+84', '');
			phone = phone.replace('0084', '');
			phone = phone.replace(/ /g, '');
			if (phone != '') {
				var filter = /^[0-9-+]+$/;
				if (filter.test(phone)) {
					var firstNumber = phone.substring(0, 1);
					if ((firstNumber == '9' || firstNumber == '8') && phone.length == 9) {
						if (phone.match(/^\d{10}/)) {
							return true;
						}
					} else if (firstNumber == '1' && phone.length == 10) {
						if (phone.match(/^\d{11}/)) {
							return true;
						}
					} else {
					return false;
					}
				} else {
					return false;
				}
			}  else {
			return false;
			}
		}
    </script>
    <!-- Datatables -->
        <script src="js/datatables/js/jquery.dataTables.js"></script>
        <script src="js/datatables/tools/js/dataTables.tableTools.js"></script>
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Tìm kiếm:"
                    },
                    "bSort": false,
                    'iDisplayLength': 10,
                    "sPaginationType": "full_numbers",
                    "dom": 'B<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath": "<?php // echo base_url('/js/datatables/tools/swf/copy_csv_xls_pdf.swf'); ?>"
                    }
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });
        </script>
    <!-- /input mask -->
</body>
<?php 
}
?>