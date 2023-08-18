<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/bg.php'); ?>
<div class="page-cart-confirm">
    <div class="container grid">
        <div class="col-3-11-tablet col-1-5-mobile">
            <?php
                $active='confirm';
                include('../../components/cart/progress.php');
            ?>
            <div class="page-cart-confirm__cart">
                <?php
                    $delete=true;
                    include('../../components/cart/product.php');
                ?>
                <?php
                    $delete=true;
                    include('../../components/cart/product.php');
                ?>
                <div class="page-cart-confirm__cart-shipment">
                    <h3>寄送方式</h3>
                    <label for="none">
                        <input type="radio" id="none" name="shipment">
                        不需寄送
                    </label>
                    <label for="pickup">
                        <input type="radio" id="pickup" name="shipment">
                        現場取貨
                    </label>
                    <label for="delivery">
                        <input type="radio" id="delivery" name="shipment">
                        宅配
                    </label>
                    <label for="convenience">
                        <input type="radio" id="convenience" name="shipment">
                        超商取貨
                    </label>
                    <span><?php get_svg('notice') ?>您尚未選擇取貨門市</span>
                    <p>
                        <span>運費</span>
                        <span>$0</span>
                    </p>
                    <div class="page-cart-confirm__cart-shipment-btn">
                        <?php 
                            $tag="button";
                            $url="";
                            $target="";
                            $text="選擇取貨門市";
                            $style="";
                            include ("../../components/button.php");
                        ?>
                    </div>
                </div>
                <hr>
                <div class="page-cart-confirm__cart-coupon">
                    <h3>優惠券</h3>
                    <p>選擇可用的優惠券</p>
                    <?php include('../../components/cart/coupon.php');?>
                    <?php include('../../components/cart/coupon.php');?>
                    <div class="page-cart-confirm__cart-coupon-code">
                        <p>輸入優惠代碼</p>
                        <div class="page-cart-confirm__cart-coupon-code-input">
                            <input type="text" placeholder="請輸入...">
                            <?php 
                                $tag="button";
                                $url="";
                                $target="";
                                $text="送出";
                                $style="";
                                include ("../../components/button.php");
                            ?>
                        </div>
                    </div>
                    <div class="page-cart-confirm__cart-coupon-subtotal">
                        <p>商品金額小計</p>
                        <span>$16400</span>
                    </div>
                    <div class="page-cart-confirm__cart-coupon-discount">
                        <p>折價金額</p>
                        <span>$200</span>
                    </div>
                </div>
                <hr>
                <div class="page-cart-confirm__cart-total">
                    <p>共計<span>6</span>項商品</p>
                    <span>$16200</span>
                </div>
                <hr class="-desktop">
                <div class="page-cart-confirm__cart-bottom">
                    <div class="page-cart-confirm__cart-bottom-btn -desktop">
                        <?php 
                            $tag="a";
                            $url="/products";
                            $target="";
                            $text="繼續購物";
                            $style="-red -transparent";
                            include ("../../components/button.php");
                        ?>
                    </div>
                    <div class="page-cart-confirm__cart-bottom-btn -desktop">
                        <?php 
                            $tag="a";
                            $url="/cart/search";
                            $target="";
                            $text="下一步";
                            $style="-red";
                            include ("../../components/button.php");
                        ?>
                    </div>
                    <div class="page-cart-confirm__cart-bottom-btn -mobile">
                        <?php 
                            $tag="a";
                            $url="/products";
                            $target="";
                            $text="繼續購物";
                            $style="";
                            include ("../../components/button.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-cart-confirm__popup">
        <div class="page-cart-confirm__popup-wrapper">
            <div class="page-cart-confirm__popup-wrapper-close">
                <?php get_svg('close') ?>
            </div>
            <p>您選擇的取貨門市：</p>
            <p>711 亞東門市</p>
            <div class="page-cart-confirm__popup-wrapper-btns">
                <div class="page-cart-confirm__popup-wrapper-btns-item">
                    <?php 
                        $tag="button";
                        $url="";
                        $target="";
                        $text="重新選擇";
                        $style="-white";
                        include ("../../components/button.php");
                    ?>
                </div>
                <div class="page-cart-confirm__popup-wrapper-btns-item" id="shipment_confirm">
                    <?php 
                        $tag="button";
                        $url="";
                        $target="";
                        $text="確認";
                        $style="";
                        include ("../../components/button.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="page-cart-confirm__mobile" id="cart-bottom">
        <div class="page-cart-confirm__mobile-wrapper container grid">
            <div class="page-cart-confirm__mobile-text col-1-3-mobile">
                <p>總計</p>
                <span>＄16200</span>
            </div>
            <div class="page-cart-confirm__mobile-btn col-3-5-mobile">
                <?php 
                    $tag="a";
                    $url="/cart/search";
                    $target="";
                    $text="下一步";
                    $style="-red";
                    include ("../../components/button.php");
                ?>
            </div>
        </div>
    </div>
</div>
<!-- <?php include('../../components/dev.php'); ?> -->
<?php include('../../components/footer.php'); ?>