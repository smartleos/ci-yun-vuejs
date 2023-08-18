<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/bg.php'); ?>
<div class="page-cart-checkout">
    <div class="container grid">
        <div class="col-3-11-tablet col-1-5-mobile">
            <div class="page-cart-checkout__progress">
                <span class="-progress">
                    <p>確認購物車</p>
                    <span></span>
                </span>
                <span class="-progress">
                    <p>填寫資料</p>
                    <span></span>
                </span>
                <span class="-active">
                    <p>確認結帳</p>
                    <span></span>
                </span>
                <span class="">
                    <p>完成訂單</p>
                    <span></span>
                </span>
            </div>
            <div class="page-cart-checkout__checkout">
                <div class="page-cart-checkout__checkout-receipt">
                    <?php include('../../components/cart/product.php'); ?>
                    <?php include('../../components/cart/product.php'); ?>
                    <ul>
                        <li>
                            <p>寄送方式</p>
                            <p>方式1</p>
                        </li>
                        <li>
                            <p>運費</p>
                            <p>0</p>
                        </li>
                        <li>
                            <p>總計</p>
                            <p>＄16400</p>
                        </li>
                        <li>
                            <p>折扣</p>
                            <p>-＄200</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <p>購買人</p>
                            <p>王小明 先生</p>
                        </li>
                        <li>
                            <p>聯絡電話</p>
                            <p>0900123456</p>
                        </li>
                        <li>
                            <p>收件人</p>
                            <p>王小明 先生</p>
                        </li>
                        <li>
                            <p>收件地址</p>
                            <p>嘉義縣水上鄉南鄉村牛稠埔水上鄉南鄉村牛稠埔 54 號之4</p>
                        </li>
                        <li>
                            <p>訂購總金額（含運費）</p>
                            <p>$200</p>
                        </li>
                    </ul>
                </div>
                <div class="page-cart-checkout__checkout-payment">
                    <h3>付款方式</h3>
                    <span>
                        <input type="radio" id="credit" name="payment" value="credit">
                        <label for="credit">
                            信用卡
                        </label>
                    </span>
                    <span>
                        <input type="radio" id="atm" name="payment" value="atm">
                        <label for="atm">
                            ATM轉帳
                        </label>
                    </span>
                    <span>
                        <input type="radio" id="line" name="payment" value="line">
                        <label for="line">
                            LINE PAY
                        </label>
                    </span>
                    <span>
                        <input type="radio" id="convenience" name="payment" value="convenience">
                        <label for="convenience">
                            超商代碼付款
                        </label>
                    </span>
                    <span>
                        <input type="radio" id="cash" name="payment" value="cash">
                        <label for="cash">
                            現金
                        </label>
                    </span>
                </div>
                <hr>
                <div class="page-cart-checkout__checkout-invoice">
                    <h3>發票方式</h3>
                    <span>
                        <input type="radio" id="invoice1" name="invoice" value="invoice1">
                        <label for="invoice1">
                            會員載具
                        </label>
                    </span>
                    <span>
                        <input type="radio" id="invoice2" name="invoice" value="invoice2">
                        <label for="invoice2">
                            手機條碼
                        </label>
                    </span>
                    <input type="text" id="carrier" name="carrier" placeholder="輸入手機條碼">
                    <span>
                        <input type="radio" id="invoice3" name="invoice" value="invoice3">
                        <label for="invoice3">
                            三聯式發票
                        </label>
                    </span>
                    <input type="text" id="carrier" name="carrier" placeholder="輸入公司抬頭及統編">
                    <span>
                        <input type="radio" id="invoice4" name="invoice" value="invoice4">
                        <label for="invoice4">
                            捐贈發票
                        </label>
                    </span>
                    <input type="text" id="carrier" name="carrier" placeholder="輸入愛心碼">
                </div>
                <div class="page-cart-checkout__checkout-agreement">
                    <label for="agreement1">
                        <input type="checkbox" id="agreement1" name="agreement1">
                        我同意服務條款
                    </label>
                    <label for="agreement2">
                        <input type="checkbox" id="agreement2" name="agreement2">
                        我同意ＯＯＯＯＯＯ
                    </label>
                </div>
                <hr>
                <div class="page-cart-checkout__checkout-total">
                    <p>共計6項商品</p>
                    <h2>$16200</h2>
                </div>
                <hr class="-desktop">
            </div>
            <div class="page-cart-checkout__bottom">
                <div class="page-cart-checkout__bottom-btn -desktop">
                    <?php 
                        $tag="a";
                        $url="/cart/information";
                        $target="";
                        $text="上一步";
                        $style="-red -transparent";
                        include ("../../components/button.php");
                    ?>
                </div>
                <div class="page-cart-checkout__bottom-btn -desktop">
                    <?php 
                        $tag="a";
                        $url="/cart/completed";
                        $target="";
                        $text="下一步";
                        $style="-red";
                        include ("../../components/button.php");
                    ?>
                </div>
                <div class="page-cart-checkout__bottom-btn -mobile">
                    <?php 
                        $tag="a";
                        $url="/cart/information";
                        $target="";
                        $text="上一步";
                        $style="";
                        include ("../../components/button.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="page-cart-checkout__mobile" id="cart-bottom">
        <div class="page-cart-checkout__mobile-wrapper container grid">
            <div class="page-cart-checkout__mobile-text col-1-3-mobile">
                <p>總計</p>
                <span>＄16200</span>
            </div>
            <div class="page-cart-checkout__mobile-btn col-3-5-mobile">
                <?php 
                    $tag="a";
                    $url="/cart/completed";
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