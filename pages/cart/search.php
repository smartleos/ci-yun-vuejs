<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/bg.php'); ?>
<div class="page-cart-search">
    <div class="container grid">
        <div class="col-3-11-tablet col-1-5-mobile">
            <div class="page-cart-search__wrapper">
                <div class="page-cart-search__content">
                    <h2>請先查詢報名資料，以避免重覆報名造成您的困擾。</h2>
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
                        <div class="form__btns">
                            <div class="form__btns-item">
                                <?php 
                                    $tag="button";
                                    $url="";
                                    $text="查詢";
                                    $style="";
                                    include ("../../components/button.php");
                                ?>
                            </div>
                        </div>
                    </form>
                    <div class="page-cart-search__list">
                        <h3>先人姓名：王大明</h3>
                        <ul>
                            <li>參加過的法會列表 01</li>
                            <li>參加過的法會列表 02</li>
                            <li>參加過的法會列表 03</li>
                        </ul>
                    </div>
                    <div class="page-cart-search__btns">
                        <div class="page-cart-search__btns-item">
                            <?php 
                                $tag="a";
                                $url="/cart/comfirm";
                                $text="返回購物車";
                                $style="-red -transparent";
                                include ("../../components/button.php");
                            ?>
                        </div>
                        <div class="page-cart-search__btns-item">
                            <?php 
                                $tag="a";
                                $url="/cart/comfirm";
                                $text="繼續結帳";
                                $style="-red";
                                include ("../../components/button.php");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../components/dev.php'); ?>
<?php include('../../components/footer.php'); ?>