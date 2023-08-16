<div class="cart-coupon">
    <figure>
        <img src="<?php echo image_dir();?>testimg/08.jpeg" alt="">
    </figure>
    <div class="cart-coupon__information">
        <h4>老顧客專屬季末回饋 - 全館商品 85 折券</h4>
        <p>滿 $9999 可使用，最高折抵 $3000 元</p>
        <span>使用期限：即日起至 2024/09/07</span>
    </div>
    <div class="cart-coupon__btn">
        <input type="radio" name="coupon">
        <div class="cart-coupon__btn-item">
            <?php 
                $tag="button";
                $url="";
                $target="";
                $text="選擇";
                $style="-red";
                include ("../../components/button.php");
            ?>
        </div>
        <div class="cart-coupon__btn-item">
            <?php 
                $tag="button";
                $url="";
                $target="";
                $text="已選";
                $style="-gray";
                include ("../../components/button.php");
            ?>
        </div>
    </div>
</div>