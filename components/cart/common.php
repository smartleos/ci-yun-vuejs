<div class="cart-common <?php echo $selected ? "-selected" : "";?>">
    <div class="cart-common__information">
        <h4>先人姓名：王大明</h4>
        <p>先人忌日（農曆）：四月初二</p>
    </div>
    <div class="cart-common__btn">
        <?php 
            $tag="button";
            $url="";
            $target="";
            $text=$selected ? "已選" : "選擇";
            $style=$selected ? "-gray" : "-red";
            include ("../../components/button.php");
        ?>
    </div>
</div>