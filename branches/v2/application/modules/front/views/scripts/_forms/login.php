<form id="fLogin" method="post" action=""><input type="hidden" name="isPopup" id="isPopup" value="0"/><table	style="width:100%">	<tr>		<td colspan="2">		<span id="msg" class="error"></span>		</td>	</tr>	<tr>		<td style="width:100px">Tên đăng nhập :</td>		<td><?php echo $this->element->username; ?></td>	</tr>	<tr>		<td>Mật khẩu :</td>		<td><?php echo $this->element->password; ?></td>	</tr>	<tr>		<td></td>		<td>			<button id="btSubmit" class="button">Đăng nhập</button>		</td>	</tr></table></form><script>$(document).ready(function(){	$("#fLogin").validate({	  rules: {		username: {			required: true		},		password: {			required: true		}	  }	});})</script>