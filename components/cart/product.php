<div class="cart-product">
    <figure>
        <img src="<?php echo image_dir();?>testimg/08.jpeg" alt="">
    </figure>
    <div class="cart-product__information">
        <h4>對年第二、第三年精緻代拜組</h4>
        <p>規格：規格 A</p>
        <p>數量：3</p>
        <span>＄5000</span>
    </div>
    <p class="<?php echo $delete ? '-show' : '' ?>">刪除</p>
    <div class="cart-product__btn <?php echo $button ? '-show' : '' ?>">
        <?php 
            $tag="button";
            $url="";
            $target="";
            $text="新增祈福人資訊";
            $style="";
            include ("../../components/button.php");
        ?>
    </div>
</div>