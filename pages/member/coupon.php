<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/bg.php'); ?>
<main class="page-member-coupon">
    <div class="container grid">
        <div class="page-member-coupon__wrapper col-3-11-tablet col-1-5-mobile">
            <?php 
                $active="coupon";
                include ("../../components/member/tab.php");
            ?>
            <?php 
                $title="我的優惠券";
                include ("../../components/member/top.php");
            ?>
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
                <div class="grid -cols-8-tablet -cols-4-mobile">
                    <form class="form col-3-7-tablet col-1-5-mobile">
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
                <div class="grid -cols-8-tablet -cols-4-mobile">
                    <div class="page-member-coupon__get-btn col-3-7-tablet col-1-5-mobile">
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