<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<style>
    <?php include('../../assets/scss/main.css'); ?>
</style>
<?php include('../../components/bg.php'); ?>
<div class="page-cart-completed">
    <div class="container grid">
        <div class="col-3-11-medium">
            <div class="page-cart-completed__progress">
                <span class="-progress">
                    <p>確認購物車</p>
                    <span></span>
                </span>
                <span class="-progress">
                    <p>填寫資料</p>
                    <span></span>
                </span>
                <span class="-progress">
                    <p>確認結帳</p>
                    <span></span>
                </span>
                <span class="-active">
                    <p>完成訂單</p>
                    <span></span>
                </span>
            </div>
            <div class="page-cart-completed__wrapper">
                <div class="page-cart-completed__wrapper-top">
                    <p>訂單成功送出，感謝您的訂購！</p>
                    <p>訂單編號  #000000</p>
                    <p>共 6 項商品，總計 $16200</p>
                </div>
                <div class="page-cart-completed__receipt">
                    <div class="page-cart-completed__receipt-top">
                        <p>商品詳細內容</p>
                        <div class="page-cart-completed__receipt-top-btn">
                            <p>收合</p>
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 9"><path d="M10.59 8.205 6 3.625l-4.59 4.58L0 6.795l6-6 6 6-1.41 1.41Z" fill="#C6A80E"/></svg>
                        </div>
                    </div>
                    <div class="page-cart-completed__receipt-wrapper">
                        <?php
                            $button=true;
                            include('../../components/cart/product.php');
                        ?>
                        <?php
                            $button=true;
                            include('../../components/cart/product.php');
                        ?>
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
                        <ul>
                            <li>
                                <p>付款方式</p>
                                <p>ATM付款</p>
                            </li>
                            <li>
                                <p>發票形式</p>
                                <p>會員載具</p>
                            </li>
                        </ul>
                        <div class="page-cart-completed__receipt-wrapper-total">
                            <p>共計6項商品</p>
                            <h2>$16200</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-cart-completed__bottom">
                <div class="page-cart-completed__bottom-btn">
                    <?php 
                        $tag="a";
                        $url="/products";
                        $target="";
                        $text="繼續購物";
                        $style="";
                        include ("../../components/button.php");
                    ?>
                </div>
                <div class="page-cart-completed__bottom-btn">
                    <?php 
                        $tag="a";
                        $url="/";
                        $target="";
                        $text="回到首頁";
                        $style="";
                        include ("../../components/button.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../components/dev.php'); ?>
<?php include('../../components/footer.php'); ?>