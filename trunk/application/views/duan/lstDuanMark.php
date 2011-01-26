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
			<td>Xóa</td>
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
				echo "<tr class='alternateRow'>";
			else 
				echo "<tr class='normalRow'>";
			?>
				<td id="td_id" style="display:none"><?php echo $duan["duan"]["id"]?></td>
				<td align="left"><a class='link' href='<?php echo BASE_PATH."/duan/view/".$duan["duan"]["id"]."/".$duan["duan"]["alias"] ?>'><?php echo $duan["duan"]["tenduan"]?></a></td>
				<td align="center" ><?php echo $html->FormatMoney($duan["duan"]["averagecost"])?></td>
				<td align="center" ><?php echo $html->FormatMoney($duan["duan"]["bidcount"])?></td>
				<td align="left"><?php  echo $duan["linhvuc"]["tenlinhvuc"] ?></td>
				<td align="center">
					<?php 
					if($duan["duan"]["nhathau_id"]!=null)
						echo "Đã đóng";
					else
						echo $html->getDaysFromSecond($duan["duan"]["active"]==1?$duan[""]["timeleft"]:0)
					?>
				</td>
				<td align="center">
					<img style="cursor:pointer" onclick="deleteDuanmark(this)" title="Xóa" alt="remove" src="<?php echo BASE_PATH ?>/public/images/icons/remove.png"/> 
				</td>
			</tr>
			<?php
		}
		?>
	</tbody>
</table>
<script>
	$(document).ready(function() {
		$("#tfoot_paging").html($("#thead_paging").html());
	});
</script>