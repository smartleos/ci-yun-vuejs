<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<style>
    <?php include('../../assets/scss/main.css'); ?>
</style>
<?php include('../../components/bg.php'); ?>
<div class="page-cart-common">
    <div class="container grid">
        <div class="col-3-11-tablet col-1-5-mobile">
            <div class="page-cart-common__wrapper">
                <div class="page-cart-common__content">
                    <h2>常用祭拜祈福資訊</h2>
                    <div class="page-cart-common__content-list">
                        <?php
                            $selected=false;
                            include('../../components/cart/common.php');
                        ?>
                        <?php
                            $selected=true;
                            include('../../components/cart/common.php');
                        ?>
                        <?php
                            $selected=false;
                            include('../../components/cart/common.php');
                        ?>
                    </div>
                </div>
                <div class="page-cart-common__content">
                    <h2>祭拜祈福資訊</h2>
                    <form class="form -grid">
                        <div class="form__input -require">
                            <label for="ancestor_name">先人姓名</label>
                            <div>
                                <input type="text" id="ancestor_name" placeholder="請輸入...">
                            </div>
                            <span>
                                <?php get_svg('notice') ?>您尚未輸入...
                            </span>
                        </div>
                        <div class="form__input">
                            <label for="ancestor_birthday">先人生日（農曆）</label>
                            <div>
                                <input type="text" id="ancestor_birthday" placeholder="請輸入...">
                            </div>
                            <span>
                                <?php get_svg('notice') ?>您尚未輸入...
                            </span>
                        </div>
                        <div class="form__input">
                            <label for="ancestor_deathday">先人忌日（農曆）</label>
                            <div>
                                <input type="text" id="ancestor_deathday" placeholder="請輸入...">
                            </div>
                            <span>
                                <?php get_svg('notice') ?>您尚未輸入...
                            </span>
                        </div>
                        <div class="form__input -require">
                            <label for="name">陽上報恩人姓名</label>
                            <div>
                                <input type="text" id="name" placeholder="請輸入...">
                            </div>
                            <span>
                                <?php get_svg('notice') ?>您尚未輸入...
                            </span>
                        </div>
                        <div class="form__input">
                            <label for="birthday">陽上報恩人生日（農曆）</label>
                            <div>
                                <input type="text" id="birthday" placeholder="請輸入...">
                            </div>
                            <span>
                                <?php get_svg('notice') ?>您尚未輸入...
                            </span>
                        </div>
                        <div class="form__input">
                            <label for="remark">備註</label>
                            <div>
                                <input type="text" id="remark" placeholder="請輸入...">
                            </div>
                            <span>
                                <?php get_svg('notice') ?>您尚未輸入...
                            </span>
                        </div>
                        <div class="form__btns">
                            <div class="form__btns-item">
                                <?php 
                                    $tag="button";
                                    $url="";
                                    $text="取消編輯";
                                    $style="-transparent -outline";
                                    include ("../../components/button.php");
                                ?>
                            </div>
                            <div class="form__btns-item">
                                <?php 
                                    $tag="button";
                                    $url="";
                                    $text="儲存編輯";
                                    $style="";
                                    include ("../../components/button.php");
                                ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../components/dev.php'); ?>
<?php include('../../components/footer.php'); ?>