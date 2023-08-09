<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<style>
    <?php include('../../assets/scss/main.css'); ?>
</style>
<?php include('../../components/bg.php'); ?>
<main class="page-member-coupon">
    <div class="container grid">
        <div class="page-member-coupon__wrapper col-3-11-medium">
            <ul class="page-member-coupon__tab">
                <li>
                    <?php 
                        $tag="a";
                        $url="/member/information";
                        $text="回首頁";
                        $style="-transparent -outline";
                        include ("../../components/button.php");
                    ?>
                </li>
                <li>
                    <?php 
                        $tag="a";
                        $url="/member/order";
                        $text="訂單查詢";
                        $style="-transparent -outline";
                        include ("../../components/button.php");
                    ?>
                </li>
                <li>
                    <?php 
                        $tag="a";
                        $url="/member/level";
                        $text="會員等級";
                        $style="-transparent -outline";
                        include ("../../components/button.php");
                    ?>
                </li>
                <li>
                    <?php 
                        $tag="a";
                        $url="/member/common";
                        $text="常用祈福人資訊";
                        $style="-transparent -outline";
                        include ("../../components/button.php");
                    ?>
                </li>
                <li>
                    <?php 
                        $tag="a";
                        $url="/member/coupon";
                        $text="我的優惠券";
                        $style="";
                        include ("../../components/button.php");
                    ?>
                </li>
                <li>
                    <?php 
                        $tag="a";
                        $url="/member/privatcy";
                        $text="隱私權/會員權益說明";
                        $style="-transparent -outline";
                        include ("../../components/button.php");
                    ?>
                </li>
            </ul>
            <div class="page-member-coupon__top">
                <div class="page-member-coupon__top-title">
                    <?php get_svg('title_cloud') ?>
                    <h1>我的優惠券</h1>
                </div>
                <div class="page-member-coupon__top-btn">
                    <?php 
                        $tag="a";
                        $url="/member/logout";
                        $text="登出";
                        $style="-red";
                        include ("../../components/button.php");
                    ?>
                </div>
            </div>
            <div class="page-member-coupon__select">
                <select name="coupon">
                    <option value="我的優惠券" selected>我的優惠券</option>
                    <option value="領取優惠券">領取優惠券</option>
                </select>
                <?php get_svg('down') ?>
            </div>
            <section class="page-member-coupon__my -active">
                <div class="page-member-coupon__my-card">
                    <figure>
                        <img src="<?php echo image_dir()?>testimg/08.jpeg" alt="">
                    </figure>
                    <div class="page-member-coupon__my-card-content">
                        <span class="-available">可使用</span>
                        <h3>老顧客專屬季末回饋 - 全館商品 85 折券</h3>
                        <p>滿 $9999 可使用，最高折抵 $3000 元</p>
                        <p>使用期限：即日起至 2024/09/07</p>
                    </div>
                </div>
                <div class="page-member-coupon__my-card">
                    <figure>
                        <img src="<?php echo image_dir()?>testimg/08.jpeg" alt="">
                    </figure>
                    <div class="page-member-coupon__my-card-content">
                        <span class="-used">已使用</span>
                        <h3>老顧客專屬季末回饋 - 全館商品 85 折券</h3>
                        <p>滿 $9999 可使用，最高折抵 $3000 元</p>
                        <p>使用期限：即日起至 2024/09/07</p>
                    </div>
                </div>
                <div class="page-member-coupon__my-card">
                    <figure>
                        <img src="<?php echo image_dir()?>testimg/08.jpeg" alt="">
                    </figure>
                    <div class="page-member-coupon__my-card-content">
                        <span class="-expired">已過期</span>
                        <h3>老顧客專屬季末回饋 - 全館商品 85 折券</h3>
                        <p>滿 $9999 可使用，最高折抵 $3000 元</p>
                        <p>使用期限：即日起至 2024/09/07</p>
                    </div>
                </div>
                <div class="page-member-coupon__my-card">
                    <figure>
                        <img src="<?php echo image_dir()?>testimg/08.jpeg" alt="">
                    </figure>
                    <div class="page-member-coupon__my-card-content">
                        <span class="-expired">已過期</span>
                        <h3>老顧客專屬季末回饋 - 全館商品 85 折券</h3>
                        <p>滿 $9999 可使用，最高折抵 $3000 元</p>
                        <p>使用期限：即日起至 2024/09/07</p>
                    </div>
                </div>
                <div class="page-member-coupon__my-card">
                    <figure>
                        <img src="<?php echo image_dir()?>testimg/08.jpeg" alt="">
                    </figure>
                    <div class="page-member-coupon__my-card-content">
                        <span class="-expired">已過期</span>
                        <h3>老顧客專屬季末回饋 - 全館商品 85 折券</h3>
                        <p>滿 $9999 可使用，最高折抵 $3000 元</p>
                        <p>使用期限：即日起至 2024/09/07</p>
                    </div>
                </div>
            </section>
            <section class="page-member-coupon__get">
                <div class="grid -cols-8-medium">
                    <form class="form col-3-7-medium">
                        <div class="form__input -important">
                            <label for="coupon">輸入專屬優惠代碼序號</label>
                            <div>
                                <input type="text" id="coupon" placeholder="請輸入專屬序號 ...">
                                <div>
                                    <?php 
                                        $tag="button";
                                        $text="領取";
                                        $style="";
                                        include ("../../components/button.php");
                                    ?>
                                </div>
                            </div>
                            <span>
                                <?php get_svg('notice') ?>折價券最高折價金額 / 比例，依照各說明為主
                            </span>
                        </div>
                    </form>
                </div>
                <hr>
                <div class="grid -cols-8-medium">
                    <div class="page-member-coupon__get-btn col-3-7-medium">
                        <?php 
                            $tag="button";
                            $text="全部領取";
                            $style="-red";
                            include ("../../components/button.php");
                        ?>
                    </div>
                </div>
                <ul class="page-member-coupon__get-list">
                    <li class="page-member-coupon__get-list-card">
                        <figure>
                            <img src="<?php echo image_dir()?>testimg/08.jpeg" alt="">
                        </figure>
                        <div class="page-member-coupon__get-list-card-content">
                            <h3>老顧客專屬季末回饋 - 全館商品 85 折券</h3>
                            <p>滿 $9999 可使用，最高折抵 $3000 元</p>
                            <div class="page-member-coupon__get-list-card-content-btn">
                                <?php 
                                    $tag="button";
                                    $text="領取";
                                    $style="";
                                    include ("../../components/button.php");
                                ?>
                            </div>
                            <p>使用期限：即日起至 2024/09/07</p>
                        </div>
                    </li>
                    <li class="page-member-coupon__get-list-card">
                        <figure>
                            <img src="<?php echo image_dir()?>testimg/08.jpeg" alt="">
                        </figure>
                        <div class="page-member-coupon__get-list-card-content">
                            <h3>老顧客專屬季末回饋 - 全館商品 85 折券</h3>
                            <p>滿 $9999 可使用，最高折抵 $3000 元</p>
                            <div class="page-member-coupon__get-list-card-content-btn">
                                <?php 
                                    $tag="button";
                                    $text="領取";
                                    $style="";
                                    include ("../../components/button.php");
                                ?>
                            </div>
                            <p>使用期限：即日起至 2024/09/07</p>
                        </div>
                    </li>
                    <li class="page-member-coupon__get-list-card">
                        <figure>
                            <img src="<?php echo image_dir()?>testimg/08.jpeg" alt="">
                        </figure>
                        <div class="page-member-coupon__get-list-card-content">
                            <h3>老顧客專屬季末回饋 - 全館商品 85 折券</h3>
                            <p>滿 $9999 可使用，最高折抵 $3000 元</p>
                            <div class="page-member-coupon__get-list-card-content-btn">
                                <?php 
                                    $tag="button";
                                    $text="領取";
                                    $style="";
                                    include ("../../components/button.php");
                                ?>
                            </div>
                            <p>使用期限：即日起至 2024/09/07</p>
                        </div>
                    </li>
                    <li class="page-member-coupon__get-list-card">
                        <figure>
                            <img src="<?php echo image_dir()?>testimg/08.jpeg" alt="">
                        </figure>
                        <div class="page-member-coupon__get-list-card-content">
                            <h3>老顧客專屬季末回饋 - 全館商品 85 折券</h3>
                            <p>滿 $9999 可使用，最高折抵 $3000 元</p>
                            <div class="page-member-coupon__get-list-card-content-btn">
                                <?php 
                                    $tag="button";
                                    $text="領取";
                                    $style="";
                                    include ("../../components/button.php");
                                ?>
                            </div>
                            <p>使用期限：即日起至 2024/09/07</p>
                        </div>
                    </li>
                    <li class="page-member-coupon__get-list-card">
                        <figure>
                            <img src="<?php echo image_dir()?>testimg/08.jpeg" alt="">
                        </figure>
                        <div class="page-member-coupon__get-list-card-content">
                            <h3>老顧客專屬季末回饋 - 全館商品 85 折券</h3>
                            <p>滿 $9999 可使用，最高折抵 $3000 元</p>
                            <div class="page-member-coupon__get-list-card-content-btn">
                                <?php 
                                    $tag="button";
                                    $text="領取";
                                    $style="";
                                    include ("../../components/button.php");
                                ?>
                            </div>
                            <p>使用期限：即日起至 2024/09/07</p>
                        </div>
                    </li>
                    <li class="page-member-coupon__get-list-card">
                        <figure>
                            <img src="<?php echo image_dir()?>testimg/08.jpeg" alt="">
                        </figure>
                        <div class="page-member-coupon__get-list-card-content">
                            <h3>老顧客專屬季末回饋 - 全館商品 85 折券</h3>
                            <p>滿 $9999 可使用，最高折抵 $3000 元</p>
                            <div class="page-member-coupon__get-list-card-content-btn">
                                <?php 
                                    $tag="button";
                                    $text="領取";
                                    $style="";
                                    include ("../../components/button.php");
                                ?>
                            </div>
                            <p>使用期限：即日起至 2024/09/07</p>
                        </div>
                    </li>
                </ul>
            </section>
        </div>
    </div>
</main>
<?php include('../../components/dev.php'); ?>
<?php include('../../components/footer.php'); ?>