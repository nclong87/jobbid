<script type="text/javascript" src="<?php echo BASE_PATH ?>/public/js/validator.js"></script>
<script type="text/javascript" src="<?php echo BASE_PATH ?>/public/js/jHtmlArea-0.7.0.js"></script>
<script type="text/javascript" src="<?php echo BASE_PATH ?>/public/js/jHtmlArea.ColorPickerMenu-0.7.0.js"></script>
<script type="text/javascript" src="<?php echo BASE_PATH ?>/public/js/jquery.form.js"></script>
<script type="text/javascript" src="<?php echo BASE_PATH ?>/public/js/utils.js"></script>
<script type="text/javascript" src="<?php echo BASE_PATH ?>/public/js/costtype.js"></script>

<link href="<?php echo BASE_PATH ?>/public/css/front/jHtmlArea.css" rel="stylesheet" type="text/css" />
<link href="<?php echo BASE_PATH ?>/public/css/front/jHtmlArea.ColorPickerMenu.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	.multiselect {  
		height:200px;
		width:300px; 
	} 
	.tdLabel {
		text-align:right;
		width:170px;
	}
</style>
<div id="content" style="width:100%;">
	<form id="formDuan" style="padding-top: 0px; padding-bottom: 10px;" >
	<div class="ui-widget-header ui-helper-clearfix ui-corner-top" style="border:none;padding-left: 5px" id="content_title">Tạo dự án - Bước 3</div>
		<input type="hidden" name="duan_alias" id="duan_alias" value="" />
		<center>
		<div class="divTable" style="width:100%">		
			<div class="tr" style="border:none">
				<div class="td tdLabel" style="text-align:right;">Email <span style="color:red;font-weight:bold;cursor:pointer;" title="Bắt buộc nhập dữ liệu">*</span> :</div>
				<div class="td tdInput">
				<input type="text"  name="duan_email" id="duan_email" tabindex=7 value="<?php echo $_SESSION['account']['username'] ?>"/>
				</div>
			</div>
			<div class="tr" style="border:none">
				<div class="td tdLabel" style="text-align:right;">Số điện thoại <span style="color:red;font-weight:bold;cursor:pointer;" title="Bắt buộc nhập dữ liệu">*</span> :</div>
				<div class="td tdInput">
				<input type="text"  name="duan_sodienthoai" id="duan_sodienthoai" tabindex=7 value="<?php echo $_SESSION['account']['sodienthoai'] ?>"/>
				</div>
			</div>
			<div class="tr" style="border:none;text-align:left">
				<div class="td">
				Thông tin chi tiết :<br/>
				<textarea id="duan_thongtinchitiet" name="duan_thongtinchitiet" style="border:none;" rows="15" tabindex=8></textarea>
				</div>
			</div>
			<div class="tr" style="border:none">
				<div class="td">
				<input id="btsubmit" type="button" onclick="location.href='<?php echo BASE_PATH?>/duan/tao_du_an_buoc_2'" value="Trở Lại Bước 2"  tabindex=9>
				<input id="btsubmit" type="submit" value="Qua Bước 4"  tabindex=9>
				</div>
			</div>
		</div>
		</center>
	</form>
</div>
<script type="text/javascript">
	function message(msg,type) {
		if(type==1) { //Thong diep thong bao
			str = "<div class='positive'><span class='bodytext' style='padding-left:30px;'>"+msg+"</span></div>";
			byId("msg").innerHTML = str;
		} else if(type == 0) { //Thong diep bao loi
			str = "<div class='negative'><span class='bodytext' style='padding-left:30px;'>"+msg+"</span></div>";
			byId("msg").innerHTML = str;
		}
	}	
	function doReset() {
		$("#formDuan")[0].reset(); //Reset form cua jquery, giu lai gia tri mac dinh cua cac field	
		$("#formDuan :input").css('border-color','');
		byId("msg").innerHTML="";
		$('#btsubmit').removeAttr('disabled');
	}
	function validateFormDuAn(formData, jqForm, options) {
		location.href = "#top";
		checkValidate=true;
		validate(['require'],'duan_tenduan',["Vui lòng nhập tên dự án!"]);
		validate(['require','checkdate'],'duan_ngayketthuc',["Vui lòng nhập ngày kết thúc"]);
		validate(['require','email'],'duan_email',["Vui lòng nhập email chủ dự án!","Email sai định dạng!"]);
		validate(['require'],'duan_sodienthoai',["Vui lòng nhập số điện thoại chủ dự án!"]);
		validate(['requireselect'],'duan_linhvuc_id',["Vui lòng chọn 1 lĩnh vực!"]);
		if(checkValidate==false) {
			return false;
		}
		if($("#select2 option").length><?php echo MAX_SKILL ?>) {
			message("Bạn được phép chọn tối đa <?php echo MAX_SKILL ?> Skill!",0);
			return false;
		}
		byId("duan_alias").value = remove_space(remove_accents(byId("duan_tenduan").value));
		$("#select2").each(function(){  
			$("#select2 option").attr("selected","selected");
		});
		var value = byId("duan_cost").value;
		byId("duan_costmin").value = arrCostType[value].min;
		byId("duan_costmax").value = arrCostType[value].max;
		$('#btsubmit').attr('disabled','disabled');
		byId("msg").innerHTML="<div class='loading'><span class='bodytext' style='padding-left:30px;'>Đang xử lý...</span></div>";
		return true;
	}
	function loadListSkills() {
		var value = byId("duan_linhvuc_id").value;
		if(value=="")
			return;
		block("#select1");
		$.ajax({
			type: "GET",
			cache: false,
			url : url("/skill/getSkillsByLinhvuc&linhvuc_id="+value),
			success: function(data){
				unblock("#select1");
				if(data == AJAX_ERROR_SYSTEM) {
					return;
				}
				var jsonObj = eval( "(" + data + ")" );
				$('#select1').html("");
				for(i=0;jsonObj[i]!=null;i++) {
					$('#select1').append("<option value="+jsonObj[i].id+" >"+jsonObj[i].skillname+"</option>");
				}
			},
			error: function(data){ unblock("#select1");;alert (data);}	
		});
	}
	function redirectPage() {
		location.href = url('/linhvuc&linhvuc_id='+byId("duan_linhvuc_id").value);
	}
	$(document).ready(function() {
		//document.title = "Tạo Dự Án - "+document.title;
		for(i=0;arrCostType[i]!=null;i++) {
			$('#duan_cost').append("<option value="+arrCostType[i].id+" >"+arrCostType[i].costtype+"</option>");
		}
		MultiSelect("btadd","btremove","btaddall","btremoveall","select1","select2");
		setCheckedValue(document.forms['formDuan'].elements['duan_isbid'], 1);
		$("#duan_thongtinchitiet").css("width","100%");
		$("#duan_thongtinchitiet").htmlarea({
				toolbar: [
					["html"], ["bold", "italic", "underline"],
					["increasefontsize", "decreasefontsize", "forecolor"],
					["orderedlist", "unorderedlist"],
					["indent", "outdent"],
					["justifyleft", "justifycenter", "justifyright"],
					["link", "unlink", "image", "horizontalrule"],
					["cut", "copy", "paste"]
				],
                toolbarText: $.extend({}, jHtmlArea.defaultOptions.toolbarText, {
                        "bold": "fett",
                        "italic": "kursiv",
                        "underline": "unterstreichen"
                    }),
                css: "<?php echo BASE_PATH ?>/public/css/front/jHtmlArea.Editor.css",
                loaded: function() {
                }
			
		}) ;
		$("#choosecolor").click(function() {
			jHtmlAreaColorPickerMenu(this, {
				colorChosen: function(color) {
					$(document.body).css('background-color', color);
				}
			});
		});
		var options = { 
			beforeSubmit: validateFormDuAn,
			url:        url("/duan/doAdd"), 
			type:      "post",
			dataType: "xml",
			success:    function(data) { 
				$('#btsubmit').removeAttr('disabled');
				data = data.body.childNodes[0].data;	
				if(data == AJAX_ERROR_NOTLOGIN) {
					location.href = url("/account/login");
					return;
				}
				if(data == "ERROR_NOTACTIVE") {
					message('Lỗi! Tài khoản của bạn chưa được active.Vui lòng kiểm tra email để active tài khoản!',0);
					return;
				}
				if(data == "ERROR_LOCKED") {
					message("Tài khoản này đã bị khóa, vui lòng liên hệ admin@jobbid.vn để mở lại!",0);
					return;
				}
				if(data == "ERROR_MAXSKILL") {
					message("Bạn được phép chọn tối đa <?php echo MAX_SKILL ?> Skill!",0);
					return;
				}
				if(data == "ERROR_FILESIZE") {
					message("File upload phải nhỏ hơn 2Mb!",0);
					return;
				}
				if(data == AJAX_DONE) {
					message("Tạo mới dự án thành công! Đang chuyển trang...",1);
					setTimeout("redirectPage()",redirect_time);
				} else if(data == AJAX_ERROR_WRONGFORMAT) {
					message("Upload file sai định dạng!",0);
				} else {
					message("Tạo mới dự án không thành công!",0);
				}
			},
			error : function(data) {
				$('#btsubmit').removeAttr('disabled');
				alert(data);
			} 
		}; 
		// pass options to ajaxForm 
		$('#formDuan').ajaxForm(options);
		$("#tfoot_paging").html($("#thead_paging").html());
		menuid = '#tao-du-an';
		$("#menu "+menuid).addClass("current");
		$("input:submit, input:button", "body").button();
		$('#duan_ngayketthuc').datepicker({
			dateFormat: "dd/mm/yy",
			changeMonth: true,
			changeYear: true
		});
		boundTip("duan_tenduan","Nhập tên dự án bạn muốn đấu thầu");
		boundTip("tip_ngayketthuc","Là ngày mà bạn muốn phiên đấu thầu cho dự án này kết thúc, sau ngày này thì các ứng viên không được phép đấu thầu cho dự án này nữa.",200,"hover");
		boundTip("duan_linhvuc_id","Danh sách các kỹ năng sẽ được load vào mục kỹ năng sau khi một lĩnh vực được chọn.");
		boundTip("tip_skill","Chọn kỹ năng cần thiết ở cột bên trái đưa qua cột bên phải, đây là các kỹ năng bạn yêu cầu các ứng viên phải có trước khi tham gia đấu thầu dự án của bạn.",300,"hover");
		boundTip("duan_email","Là email của chủ dự án mà ứng viên thắng thầu sẽ liên lạc.");
		boundTip("duan_sodienthoai","Là số điện thoại của chủ dự án mà ứng viên thắng thầu sẽ liên lạc.");
		boundTip("tip_freebid","Cho phép các ứng viên đưa ra giá thầu và thời gian để thực hiện dự án này, từ đó bạn có thể lựa chọn ra ứng viên tốt nhất cho dự án của bạn. (thông tin liên lạc của bạn chỉ hiển thị đối với ứng viên nào trúng thầu dự án của bạn)",400,"hover");
		boundTip("tip_directcontact","Thông tin liên hệ của bạn sẽ được hiển thị để các ứng viên liên hệ trực tiếp với bạn. (chức năng đấu thầu sẽ không còn nếu bạn chọn hình thức này)",400,"hover");

	});
</script>
