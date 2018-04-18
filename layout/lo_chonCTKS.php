<div class="x_panel">
    <div class="x_title">
            <div style="float:left">
                    <h2> Lựa chọn chương trình</h2>
            </div>
            <div style="float:right">
                <button id="timkiem" type="button" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Tìm kiếm</button>
            </div>
            <div style="float:right">
                <button id="upload" type="button" class="btn btn-success btn-sm"><i class="fa fa-upload"></i> Tải lên</button>
            </div>
            <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="col-md-2 col-sm-2 col-xs-2">
            <div style="float:left">
                    <h4> Mã chương trình</h4>
            </div>
        </div>
        <div class="col-md-10 col-sm-10 col-xs-10">
            <select class="select2_single form-control" tabindex="-1" id="machuongtrinh">
                <option></option>
                <option value="31">Hải Phòng</option>
                <option value="22">Quảng Ninh</option>
            </select>
        </div>
    </div>
    <div class="x_content">
        <div class="col-md-2 col-sm-2 col-xs-2">
            <div style="float:left">
                    <h4> Trạng thái khảo sát</h4>
            </div>
        </div>
        <div class="col-md-10 col-sm-10 col-xs-10">
            <select class="select2_single form-control" tabindex="-1" id="machuongtrinh">
                <option></option>
                <option value="31">Hải Phòng</option>
                <option value="22">Quảng Ninh</option>
            </select>
        </div>
    </div>
    <div class="x_content">
        <div class="col-md-2 col-sm-2 col-xs-2">
            <div style="float:left">
                    <h4> Số thuê bao</h4>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
                <input id="sodienthoai" type="text" class="form-control" placeholder="Số thuê bao">
                <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <fieldset>
                <div class="control-group">
                    <div class="controls">
                        <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="startdate" placeholder="Ngày bắt đầu" aria-descibedby="inputSuccess2Status4">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <fieldset>
                <div class="control-group">
                    <div class="controls">
                        <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="enddate" placeholder="Ngày kết thúc" aria-descibedby="inputSuccess2Status4" disabled>
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>

</div>
</div>
<!-- daterangepicker -->
<script type="text/javascript" src="../js/moment.min2.js"></script>
<script type="text/javascript" src="../js/datepicker/daterangepicker.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#startdate').daterangepicker({
        singleDatePicker: true
    }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $("#enddate").prop('disabled', false);
        $('#enddate').daterangepicker({
        singleDatePicker: true,
        minDate: $('#startdate').val()
                        }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                        });    
    });
    function getDate(element) {
                  var date;
                  try {
                        date = $.datepicker.parseDate( dateFormat, element.value );
                  } catch( error ) {
                        date = null;
                  }

                  return date;
                };
});
</script>