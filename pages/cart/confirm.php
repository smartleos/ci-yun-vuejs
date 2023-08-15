<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/bg.php'); ?>
<div class="page-cart-confirm">
    <div class="container grid">
        <div class="col-3-11-tablet col-1-5-mobile">
            <div class="page-cart-confirm__progress">
                <span class="-active -progress">
                    <p>確認購物車</p>
                    <span></span>
                </span>
                <span class="">
                    <p>填寫資料</p>
                    <span></span>
                </span>
                <span class="">
                    <p>確認結帳</p>
                    <span></span>
                </span>
                <span class="">
                    <p>完成訂單</p>
                    <span></span>
                </span>
            </div>
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
                    <label for="method1">
                        <input type="radio" id="method1" name="shipment">
                        方法1
                    </label>
                    <label for="method2">
                        <input type="radio" id="method2" name="shipment">
                        方法2
                    </label>
                    <p>
                        <span>運費</span>
                        <span>$0</span>
                    </p>
                </div>
                <hr>
                <div class="page-cart-confirm__cart-coupon">
                    <h3>優惠券</h3>
                    <p>選擇可用的優惠券</p>
                    <?php
                        $selected=true;
                        include('../../components/cart/coupon.php');
                    ?>
                    <?php
                        $selected=false;
                        include('../../components/cart/coupon.php');
                    ?>
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
                            $url="/cart/information";
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
            <div class="page-cart-confirm__mobile container">
                <div class="page-cart-confirm__mobile-text">
                    <p>總計</p>
                    <span>＄16200</span>
                </div>
                <div class="page-cart-confirm__mobile-btn">
                    <?php 
                        $tag="a";
                        $url="/cart/information";
                        $target="";
                        $text="下一步";
                        $style="-red";
                        include ("../../components/button.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../components/dev.php'); ?>
<?php include('../../components/footer.php'); ?>