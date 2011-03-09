<?php
JHTML::stylesheet("style.css","components/com_tourdulich/css/");
jimport('functionclass');
?>
<div id="tdl-wrap">    
    <div class='tourdetail' >
        <a  class="tourname" href="#" ><span style="font-size: 12pt;color: red"><?php echo $this->data['tentour']; ?></span></a>
        <div class="info">
            <b>Price :</b>&nbsp;<?php echo FunctionClass::FormatMoney($this->data['giatien']) ?> USD<br>
            <b>Depart Date :</b>&nbsp;   <?php echo $this->data['ngaykhoihanh'] ?><br>
            <b>Means :</b> &nbsp;  <?php echo $this->data['phuongtien'] ?><br>
            <b>Time Length :</b> &nbsp;  <?php echo $this->data['thoigiandi'] ?>
        </div>
        <img style="float: right;" alt="Đặt Tour" src="/joomla/images/nut_booking_m.gif">
        <div class="intro">
            <?php echo $this->data['gioithieu'] ?>
        </div>
        <?php
        foreach($this->lstContent as $item)
        {
            ?>
        <div class="content_title">
            <?php echo $item['tieude'] ?>
        </div>
        <div class="content">
            <?php echo $item['noidung'] ?>
        </div>
            <?php
        }
        ?>
    </div>   
</div>
