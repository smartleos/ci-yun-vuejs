<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<style>
    <?php include('../../assets/scss/main.css'); ?>
</style>
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
                            <p>付款方式</p>
                            <p>ATM付款</p>
                        </li>
                        <li>
                            <p>訂單狀態</p>
                            <p>已完成</p>
                        </li>
                        <li>
                            <p>付款狀態</p>
                            <p>已付款</p>
                        </li>
                        <li>
                            <p>訂購日期</p>
                            <p>2022/04/18</p>
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
                        <input type="radio" id="payment1" name="payment" value="payment1">
                        <label for="payment1">
                            方式1
                        </label>
                    </span>
                    <span>
                        <input type="radio" id="payment2" name="payment" value="payment2">
                        <label for="payment2">
                            方式2
                        </label>
                    </span>
                </div>
                <hr>
                <div class="page-cart-checkout__checkout-invoice">
                    <h3>發票方式</h3>
                    <span>
                        <input type="radio" id="invoice1" name="invoice" value="invoice1">
                        <label for="invoice1">
                            方式1
                        </label>
                    </span>
                    <span>
                        <input type="radio" id="invoice2" name="invoice" value="invoice2">
                        <label for="invoice2">
                            方式2
                        </label>
                    </span>
                    <input type="text" id="carrier" name="carrier" placeholder="請輸入載具條碼">
                </div>
                <div class="page-cart-checkout__checkout-agreement">
                    <label for="agreement1">
                        <input type="checkbox" id="agreement1" name="agreement1">
                        我同意服務條款
                    </label>
                    <label for="agreement2">
                        <input type="checkbox" id="agreement2" name="agreement2">
                        我同意XXXX
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
            <div class="page-cart-checkout__mobile container">
                <div class="page-cart-checkout__mobile-text">
                    <p>總計</p>
                    <span>＄16200</span>
                </div>
                <div class="page-cart-checkout__mobile-btn">
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
</div>
<?php include('../../components/dev.php'); ?>
<?php include('../../components/footer.php'); ?>