<div id="content" style="width:100%;">
	<div class="ui-widget-header ui-helper-clearfix ui-corner-all" style='text-align: left; padding-left: 10px; margin-left: -5px; width: 100%;' id="content_title"></div>
	<fieldset style="margin-bottom: 10px; margin-top: 10px; text-align: center;">
		<legend><span style="font-weight:bold;">Lỗi hệ thống</span></legend>
		<div id="msg" style="text-align:left">
		<div class='negative'><span class='bodytext' style='padding-left:30px;'><?php echo $msg ?></span></div>
		</div>
	</fieldset>
</div>
<script>
	$(document).ready(function() {
		$("#content_title").css("width",width_content-19);
		$("#content_title").html("THÔNG BÁO");
	});
</script>
