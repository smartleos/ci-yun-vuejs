<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<style>
    <?php include('../../assets/scss/main.css'); ?>
</style>
<?php include('../../components/bg.php'); ?>
<main class="page-member-information">
    <div class="container grid">
        <div class="page-member-information__wrapper col-3-11-medium">
            <ul class="page-member-information__tab">
                <li>
                    <?php 
                        $tag="a";
                        $url="/member/information";
                        $text="回首頁";
                        $style="";
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
                        $style="-transparent -outline";
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
            <div class="page-member-information__top">
                <div class="page-member-information__top-title">
                    <?php get_svg('title_cloud') ?>
                    <h1>會員基本資料</h1>
                </div>
                <div class="page-member-information__top-btn">
                    <?php 
                        $tag="a";
                        $url="/member/logout";
                        $text="登出";
                        $style="-red";
                        include ("../../components/button.php");
                    ?>
                </div>
            </div>
            <div class="page-member-information__content">
                <form class="form -grid">
                    <div class="form__input -require">
                        <label for="name">您的大名</label>
                        <div>
                            <input type="text" id="name" placeholder="請輸入您的姓名...">
                        </div>
                        <span>
                            <?php get_svg('notice') ?>您尚未輸入...
                        </span>
                    </div>
                    <div class="form__radio -require">
                        <label>性別</label>
                        <div>
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
                        </div>
                        <span>
                            <?php get_svg('notice') ?>您尚未輸入...
                        </span>
                    </div>
                    <div class="form__input -require -disable -notice">
                        <label for="name">聯絡手機</label>
                        <div>
                            <input type="text" id="phone" placeholder="請輸入..." value="0975-055-088">
                        </div>
                        <span>
                            <?php get_svg('notice') ?>如需修改請聯絡客服人員
                        </span>
                    </div>
                    <div class="form__input">
                        <label for="email">E-mail 信箱</label>
                        <div>
                            <input type="email" id="email" placeholder="請輸入..." value="test@mail.com.tw">
                        </div>
                        <span>
                            <?php get_svg('notice') ?>您尚未輸入...
                        </span>
                    </div>
                    <div class="form__input">
                        <label for="phone">聯絡電話</label>
                        <div>
                            <input type="text" id="phone" placeholder="請輸入...">
                        </div>
                        <span>
                            <?php get_svg('notice') ?>您尚未輸入...
                        </span>
                    </div>
                    <div class="form__input">
                        <label for="birthday">生日</label>
                        <div>
                            <input type="text" id="birthday" placeholder="請輸入...">
                        </div>
                        <span>
                            <?php get_svg('notice') ?>您尚未輸入...
                        </span>
                    </div>
                    <div class="form__input">
                        <label for="address">地址</label>
                        <div>
                            <input type="text" id="address" placeholder="請輸入...">
                        </div>
                        <span>
                            <?php get_svg('notice') ?>您尚未輸入...
                        </span>
                    </div>
                    <div class="form__input -require -disable">
                        <label for="password">密碼</label>
                        <div class="-password">
                            <?php get_svg('lock') ?>
                            <input type="password" id="password" placeholder="請輸入您的密碼 ...">
                            <div class="show-password">
                                <?php get_svg('eye') ?>
                            </div>
                        </div>
                        <span>
                            <?php get_svg('notice') ?>您尚未輸入...
                        </span>
                        <a href="">忘記密碼</a>
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
</main>
<?php include('../../components/dev.php'); ?>
<?php include('../../components/footer.php'); ?>