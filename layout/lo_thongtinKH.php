<div class="x_panel">
        <div class="x_title">
                <div style="float:left">
                        <h2> Thông tin khách hàng</h2>
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
                        <input id="cmnd" type="text" class="form-control" placeholder="Số CMND/CCCD">
                        <span class="fa fa-credit-card form-control-feedback right" aria-hidden="true"></span>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-8">
                        <input id="nghenghiep" type="text" class="form-control" placeholder="Thông tin nghề nghiệp">
                        <span class="fa fa-university form-control-feedback right" aria-hidden="true"></span>
                </div>     
        </div>
        <div class="x_content">
            <div class="col-md-12 col-sm-12 col-xs-12">
                        <input id="diachi" type="text" class="form-control" placeholder="Địa chỉ thuê bao">
                        <span class="fa fa-home form-control-feedback right" aria-hidden="true"></span>
            </div>
        </div>
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
</div>
	<script>
		$(document).ready(function () {
			$(".select2_single").select2({
				placeholder: "Vui lòng chọn ...",
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
