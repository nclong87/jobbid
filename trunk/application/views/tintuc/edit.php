<div id="content">
	<div id="TitleText"><h1>TRANG QUẢN LÝ TIN TỨC</h1></div>
	<table border="0" width="100%" cellpadding="5">
                        <tbody>
                            <tr style="height:30px">
                                <td align="center">&nbsp;
                                    <?php
                if (isset($_SESSION['error'])) {
                    echo("<span class=\"errorMessage\">".$_SESSION['error']."</span>");
                    $_SESSION['error']=null;
                }
                if (isset($_SESSION['success'])) {
                    echo("<span class=\"successMessage\">".$_SESSION['success']. "</span>");
                    $_SESSION['success']=null;
                }
                
                                    ?>

                                </td>
                            </tr>
                        </tbody>
	</table>
        <?php if(isset($tintuc)): ?>
        <fieldset>
            <legend><span class="infoMessage"> Chỉnh sửa tin</span></legend>
	<div style="float:left;width:13%">
			<img alt='pic-editor' style="cursor:pointer" src="/public/img/editor/smileys/Goldushki000.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki000.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki001.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki001.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki002.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki002.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki003.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki003.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki004.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki004.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki005.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki005.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki006.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki006.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki007.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki007.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki008.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki008.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki009.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki009.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki010.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki010.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki011.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki011.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki012.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki012.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki013.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki013.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki014.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki014.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki015.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki015.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki016.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki016.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki017.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki017.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki018.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki018.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki019.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki019.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki020.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki020.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki021.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki021.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki022.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki022.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki023.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki023.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki024.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki024.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki025.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki025.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/Goldushki026.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/Goldushki026.gif');" width="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/goldy1.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/goldy1.gif');" height="30">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/goldy2.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/goldy2.gif');" height="23">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/goldy3.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/goldy3.gif');" height="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/goldy4.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/goldy4.gif');" height="21">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/goldy5.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/goldy5.gif');" height="19">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/goldy6.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/goldy6.gif');" height="26">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/goldy7.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/goldy7.gif');" height="21">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/goldy8.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/goldy8.gif');" height="23">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/goldy9.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/goldy9.gif');" height="20">
            <img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/smileys/goldy10.gif" title="" onclick="doFormat('InsertImage', '/public/img/editor/smileys/goldy10.gif');" height="20">
	</div>
	<div style="float:left;width:87%">
            <form name="f" method="POST" action="/tintuc/capnhat" >
                <input type="hidden" name="TieuDe" value="">
                <input type="hidden" name="NoiDung" value="">
                <input type="hidden" name="id" value="<?php echo $tintuc['TinTuc']['id'] ?>" >
		<table width="100%">
			<tbody>
				<tr>
					<td><span class="infoMessage">Tiêu Đề</span></td>
					<td>
						<input type="text" id="tieude" class="input" value="<?php echo $tintuc['TinTuc']['tieude'] ?>">
					</td>
				</tr>
				<tr>
					<td><span class="infoMessage">Màu Chữ</span></td>
					<td>
						<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/black.gif" title="Black" onclick="doFormat('forecolor','#000000');" width="20" height="20">
						<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/white.gif" title="White" onclick="doFormat('forecolor','#FFFFFF');" width="20" height="20">
						<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/yellow.gif" title="Yellow" onclick="doFormat('forecolor','#FFFF00');" width="20" height="20">
						<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/green.gif" title="Green" onclick="doFormat('forecolor','#008000');" width="20" height="20">
						<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/blue.gif" title="Blue" onclick="doFormat('forecolor','#0000FF');" width="20" height="20">
						<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/red.GIF" title="Red" onclick="doFormat('forecolor','#FF0000');" width="20" height="20">
						<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/fuchsia.gif" title="Fuchsia" onclick="doFormat('forecolor','#FF00FF');" width="20" height="20">
						<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/purple.gif" title="Purple" onclick="doFormat('forecolor','#800080');" width="20" height="20">
						<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/maroon.gif" title="Maroon" onclick="doFormat('forecolor','#800000');" width="20" height="20">
						<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/silver.gif" title="Silver" onclick="doFormat('forecolor','#C0C0C0');" width="20" height="20">
						<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/gray.gif" title="Gray" onclick="doFormat('forecolor','#808080');" width="20" height="20">
						<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/oliver.gif" title="Oliver" onclick="doFormat('forecolor','#808000');" width="20" height="20">
						<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/lime.gif" title="Lime" onclick="doFormat('forecolor','#00FF00');" width="20" height="20">
						<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/navy.gif" title="Navy" onclick="doFormat('forecolor','#000080');" width="20" height="20">
						<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/teal.gif" title="Teal" onclick="doFormat('forecolor','#008080');" width="20" height="20">
						<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/aqua.gif" title="Aqua" onclick="doFormat('forecolor','#00FFFF');" width="20" height="20">
					</td>
				</tr>
				<tr>
					<td width="135px"><span class="infoMessage">Định Dạng Chữ</span></td>
					<td>
						
						
						<div style="float:left">
							<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/bold.png" title="In Đậm" onclick="doFormat('bold');" width="24" height="24">
							<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/italic.png" title="In Nghiêng" onclick="doFormat('italic');" width="24" height="24">
							<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/underline.png" title="Gạch Dưới" onclick="doFormat('underline');" width="24" height="24">
							<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/image-button.png" title="Chèn Ảnh" onclick="insertImage();" width="24" height="24">
							<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/link-button.png" title="Chèn Liên Kết" onclick="addLink();" width="24" height="24">
							<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/in_left.png" title="Canh Trái" onclick="doFormat('justifyleft');" width="24" height="24">
							<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/in_center.png" title="Canh Giữa" onclick="doFormat('justifycenter');" width="24" height="24">
							<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/in_right.png" title="Canh Phải" onclick="doFormat('justifyright');" width="24" height="24">
							<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/left_tab.png" title="Qua Trái" onclick="doFormat('outdent');" width="24" height="24">
							<img alt="pic-editor" style="cursor:pointer" src="/public/img/editor/right_tab.png" title="Qua Phải" onclick="doFormat('indent');" width="24" height="24">	
						</div>
						<div style="padding-left:30px;float:left">
						Font Size:<select style="margin-left:10px" size="1" name="fontsize" onchange="doFormat('fontsize',this.value);">
							<option value="1">8(pt)</option>
							<option value="2">10(pt)</option>
							<option value="3">12(pt)</option>
							<option value="4">14(pt)</option>
							<option value="5">18(pt)</option>
							<option value="6">24(pt)</option>
							<option value="7">36(pt)</option>
						</select>
						</div>
					</td>
				</tr>                     
				<tr>
                                    <td><span class="infoMessage">Nội Dung</span></td>
					<td>
						<iframe id="textArea" style="width:96%;height:300px;background-color:white;overflow:auto;font-family:Arial; font-size:12pt" name="I1"></iframe>
					</td>
				</tr>
                                <tr>
                                    <td><span class="infoMessage">Trạng Thái </span></td>
                                    <td>
                                    <div style="text-align:left">
                                         <select size="1" name="trangthai" >
                                            <option value="1" <?php if($tintuc['TinTuc']['trangthai']==1) echo 'selected'; ?>>Hiển Thị</option>
                                            <option value="0" <?php if($tintuc['TinTuc']['trangthai']==0) echo 'selected'; ?> >Ẩn</option>
                                        </select>
                                    </div>
                                    </td>
                                </tr>
				<tr>
                                    <td colspan="2" align="center">
						
                        <input type="button" value="Cập Nhật" onclick="doSend()" />
						<input type="button" value="Trở lại trang quản trị tin" onclick="location.href ='/tintuc/quantritin'" />
						
					</td>
				</tr>
			</tbody>
		</table>
               </form>
	</div>
    <script type="text/javascript">

	var id=document.f.id.value;
    var url = "/tintuc/laynoidung/"+id;
	var editor;
	ajax(url,0);	
    function processStateChange()
    {
            if (req.readyState == 4)
            {
                    var text = req.responseText;
					editor = document.getElementById('textArea').contentWindow.document;
					editor.designMode='On';
					editor.open();
					editor.write(text);
					editor.close();
            }
    }
    
	
function doFormat(a,b){
    document.getElementById('textArea').contentWindow.focus();
  if(editor.queryCommandEnabled(a)){
    if(!b){b=null;}
        editor.execCommand(a,false,b);
  }

}
function addLink(){
  var aLink=prompt('Enter or paste a link :', '');
    if(aLink){
        doFormat('CreateLink',  aLink);
    }
}
function insertImage(){
 document.getElementById('textArea').contentWindow.focus();
  var aLink=prompt('Enter or paste a URL :', '');
    if(aLink){
        doFormat('InsertImage',  aLink);
        doFormat('inserthtml','<p align="left">')
    }
}
function unformat(){
    doFormat('removeformat');
    doFormat('unlink');
}
function open_win(url)
{

mywindow=window.open(url,'mywindow','Width=350,Height=170');
mywindow.moveTo(350,100);

}
function  doSend(){
  var myIFrame = document.getElementById('textArea');
  var content = myIFrame.contentWindow.document.body.innerHTML;
  // kiểm tra dữ liệu nếu muốn :
  //..............................
  var text=document.getElementById('tieude').value;
  if(text.toString().length==0)
      {
          alert('Bạn chưa nhập tiêu đề!');
          return;
      }
  //gán giá trị trong editor vào hidden input :
  document.f.NoiDung.value=content;
  document.f.TieuDe.value=text;
  //và submit form :
  document.f.submit();
}

    </script>
     </fieldset>
     <?php endif ?>
</div>
