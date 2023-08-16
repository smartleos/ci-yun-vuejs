<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/bg.php'); ?>
<div class="page-cart-information">
    <div class="container grid">
        <div class="col-3-11-tablet col-1-5-mobile">
            <div class="page-cart-information__progress">
                <span class="-progress">
                    <p>確認購物車</p>
                    <span></span>
                </span>
                <span class="-active">
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
            <form class="page-cart-information__information">
                <div class="page-cart-information__form" id="buyer">
                    <h2>購買者資料</h2>
                    <div class="page-cart-information__form-wrapper">
                        <div class="page-cart-information__form-wrapper-col">
                            <p>您的大名<span>*</span></p>
                            <input type="text" id="buyer_name" name="buyer_name" placeholder="請輸入...">
                        </div>
                        <div class="page-cart-information__form-wrapper-col">
                            <p>性別</p>
                            <span>
                                <div>
                                    <input type="radio" id="buyer_male" name="buyer_gender" value="male">
                                    <label for="buyer_male">
                                        先生
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" id="buyer_female" name="buyer_gender" value="female">
                                    <label for="buyer_female">
                                        小姐
                                    </label>
                                </div>
                            </span>
                        </div>
                        <div class="page-cart-information__form-wrapper-col">
                            <p>聯絡電話<span>*</span></p>
                            <input type="tel" id="buyer_phone" name="buyer_phone" placeholder="請輸入...">
                        </div>
                        <div class="page-cart-information__form-wrapper-col">
                            <p>地址<span>*</span></p>
                            <input type="text" id="buyer_address" name="buyer_address" placeholder="請輸入...">
                        </div>
                    </div>
                </div>
                <div class="page-cart-information__form" id="receiver">
                    <h2>收件人資料</h2>
                    <label for="same">
                        <input type="checkbox" id="same" name="same">
                        同購買者資料
                    </label>
                    <div class="page-cart-information__form-wrapper">
                        <div class="page-cart-information__form-wrapper-col">
                            <p>您的大名<span>*</span></p>
                            <input type="text" id="receiver_name" name="receiver_name" placeholder="請輸入...">
                        </div>
                        <div class="page-cart-information__form-wrapper-col">
                            <p>性別</p>
                            <span>
                                <div>
                                    <input type="radio" id="receiver_male" name="receiver_gender" value="male">
                                    <label for="receiver_male">
                                        先生
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" id="receiver_female" name="receiver_gender" value="female">
                                    <label for="receiver_female">
                                        小姐
                                    </label>
                                </div>
                            </span>
                        </div>
                        <div class="page-cart-information__form-wrapper-col">
                            <p>聯絡電話<span>*</span></p>
                            <input type="number" id="receiver_phone" name="receiver_phone" placeholder="請輸入...">
                        </div>
                        <div class="page-cart-information__form-wrapper-col">
                            <p>地址<span>*</span></p>
                            <input type="text" id="receiver_address" name="receiver_address" placeholder="請輸入...">
                        </div>
                    </div>
                    <label for="save">
                        <input type="checkbox" id="save" name="save">
                        將收貨人資料儲存到我的通訊錄
                    </label>
                </div>
                <div class="page-cart-information__form">
                    <h2>現場取貨</h2>
                    <div class="page-cart-information__form-wrapper">
                        <div class="page-cart-information__form-wrapper-col">
                            <p>取貨日期<span>*</span></p>
                            <input type="date" id="receiver_name" name="receiver_name" placeholder="請輸入...">
                        </div>
                        <div class="page-cart-information__form-wrapper-col">
                            <p>取貨時間<span>*</span></p>
                            <input type="time" id="receiver_phone" name="receiver_phone" placeholder="請輸入...">
                        </div>
                        <div class="page-cart-information__form-wrapper-col">
                            <p>訂單備註<span>*</span></p>
                            <input type="text" id="receiver_address" name="receiver_address" placeholder="請輸入...">
                        </div>
                    </div>
                </div>
            </form>
            <div class="page-cart-information__bottom">
                <div class="page-cart-information__bottom-btn -desktop">
                    <?php 
                        $tag="a";
                        $url="/cart/confirm";
                        $target="";
                        $text="上一步";
                        $style="-red -transparent";
                        include ("../../components/button.php");
                    ?>
                </div>
                <div class="page-cart-information__bottom-btn -desktop">
                    <?php 
                        $tag="a";
                        $url="/cart/checkout";
                        $target="";
                        $text="下一步";
                        $style="-red";
                        include ("../../components/button.php");
                    ?>
                </div>
                <div class="page-cart-information__bottom-btn -mobile">
                    <?php 
                        $tag="a";
                        $url="/cart/confirm";
                        $target="";
                        $text="上一步";
                        $style="";
                        include ("../../components/button.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="page-cart-information__mobile" id="cart-bottom">
        <div class="page-cart-information__mobile-wrapper container grid">
            <div class="page-cart-information__mobile-text col-1-3-mobile">
                <p>總計</p>
                <span>＄16200</span>
            </div>
            <div class="page-cart-information__mobile-btn col-3-5-mobile">
                <?php 
                    $tag="a";
                    $url="/cart/checkout";
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