<style>
	.multiselect {  
		height:200px;
		width:270px; 
	} 
	.divfloat1 {
		float:left;
		padding:5px 5px 5px 15px;
		position:relative;
		width:45%;
	}
</style>
<div id="content" style="width:100%;">
	<div class="ui-widget-header ui-helper-clearfix ui-corner-all" style='text-align: left; padding-left: 10px; margin-left: -5px; width: 100%;' id="content_title">Content</div>
	<div id="datagrid" style="padding-top:10px;padding-bottom:10px;">
		<table width="100%">
			<thead>
				<tr id="thead_paging">
					<td colspan="11" align="center" style="color:black">
						<a class="link" style="padding-right:5px" href='#' onclick="selectpage(1)">Begin</a>
						<?php 
						while($pagesbefore<$pagesindex) {
							echo "<a class='link' href='#' onclick='selectpage($pagesbefore)'>$pagesbefore</a>";
							$pagesbefore++;
						}
						?>
						<span style="font-weight:bold;color:red"><?php echo $pagesindex ?></span>
						<?php 
						while($pagesnext>$pagesindex) {
							$pagesindex++;
							echo "<a class='link' href='#' onclick='selectpage($pagesindex)'>$pagesindex</a>";
						}
						?>
						<a class="link" style="padding-left:5px" href='#' onclick="selectpage(<?php echo $pageend ?>)">...<?php echo $pageend ?></a>			
					</td>
				</tr>
				<tr class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" style="font-weight:bold;height:20px;text-align:center;">
					<td>Tên dự án</td>
					<td>Giá thầu TB</td>
					<td>Bid</td>
					<td>Lĩnh vực</td>
					<td>Còn</td>
					<td>Sửa</td>
				</tr>
			</thead>
			<tfoot>
				<tr id="tfoot_paging"></tr>
			</tfoot>
			<tbody>
				<?php
				$i=0;
				foreach($lstDuan as $duan) {
					$i++;
					if($i%2==0)
						echo "<tr class='alternateRow' height='30px'>";
					else 
						echo "<tr class='normalRow' height='30px'>";
					?>
						<td id="td_id" style="display:none"><?php echo $duan["duan"]["id"]?></td>
						<td id="td_tenduan" align="left"><a class='link' href='<?php echo BASE_PATH."/duan/view/".$duan["duan"]["id"]."/".$duan["duan"]["alias"] ?>'><?php echo $duan["duan"]["tenduan"]?></a></td>
						<td align="center" ><?php echo $html->FormatMoney($duan["duan"]["averagecost"])?></td>
						<td align="center" ><?php echo $html->FormatMoney($duan["duan"]["bidcount"])?></td>
						<td id="td_linhvuc" align="left"><?php  echo $duan["linhvuc"]["tenlinhvuc"] ?></td>
						<td id="td_lefttime"align="center">
							<?php 
							if($duan["duan"]["nhathau_id"]!=null)
								echo "Đã đóng";
							else
								echo $html->getDaysFromSecond($duan["duan"]["active"]==1?$duan[""]["timeleft"]:0)
							?>
						</td>
						<td align="center">
							<img style="cursor:pointer" onclick="editMyProject(<?php echo $duan["duan"]["id"]?>)" title="Sửa" alt="edit" src="<?php echo BASE_PATH ?>/public/images/icons/edit.png"/> 
						</td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>
<script>
	function message(msg,type) {
		if(type==1) { //Thong diep thong bao
			str = "<div class='positive'><span class='bodytext' style='padding-left:30px;'>"+msg+"</span></div>";
			byId("msg").innerHTML = str;
		} else if(type == 0) { //Thong diep bao loi
			str = "<div class='negative'><span class='bodytext' style='padding-left:30px;'>"+msg+"</span></div>";
			byId("msg").innerHTML = str;
		}
	}	
	function selectpage(page) {
		loadListDuans(page);
	};
	function editMyProject(duan_id) {
		if(duan_id==null) 
			return;
		location.href = url('/duan/edit&duan_id='+duan_id);
	}
	function loadListDuans(page) {
		block("#content");
		$.ajax({
			type : "GET",
			cache: false,
			url: url("/duan/lstMyProjects/"+page),
			success : function(data){	
				//alert(data);
				unblock("#content");
				if(data == AJAX_ERROR_NOTLOGIN) {
					location.href = url("/account/login");
				} else {
					$("#datagrid").html(data);
					$("input:submit, input:button", "#datagrid").button();	
				}
				
			},
			error: function(data){ 
				unblock("#content");
				alert (data);
			}			
		});
	}
	$(document).ready(function() {
		// pass options to ajaxForm 
		$("#ds_du_an_cua_toi").css('color','#F68618');
		$("#content_title").css("width",width_content-19);
		$("#content_title").html("Danh sách dự án của tôi");
		$("input:submit, input:button", "body").button();
		$("#tfoot_paging").html($("#thead_paging").html());
	});
</script>
