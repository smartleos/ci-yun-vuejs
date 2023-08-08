<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<style>
    <?php include('../../assets/scss/main.css'); ?>
</style>
<?php include('../../components/bg.php'); ?>
<main class="page-member-change-password">
    <div class="container grid">
        <div class="page-member-change-password__wrapper col-5-9-medium">
            <div class="page-member-change-password__content">
                <div class="page-member-change-password__content-title">
                    <?php 
                        $title="修改密碼";
                        include ("../../components/title.php");
                    ?>
                </div>
                <form class="page-member-change-password__form form">
                    <div class="form__input -require">
                        <label for="password">原本密碼</label>
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
                    </div>
                    <div class="form__input -require">
                        <label for="password">新密碼</label>
                        <div class="-password">
                            <?php get_svg('lock') ?>
                            <input type="password" id="password" placeholder="請輸入您的新密碼 ...">
                            <div class="show-password">
                                <?php get_svg('eye') ?>
                            </div>
                        </div>
                        <span>
                            <?php get_svg('notice') ?>您尚未輸入...
                        </span>
                    </div>
                    <div class="form__input -require">
                        <label for="password">再次輸入新密碼</label>
                        <div class="-password">
                            <?php get_svg('lock') ?>
                            <input type="password" id="password" placeholder="請再次輸入您的新密碼 ...">
                            <div class="show-password">
                                <?php get_svg('eye') ?>
                            </div>
                        </div>
                        <span>
                            <?php get_svg('notice') ?>您尚未輸入...
                        </span>
                    </div>
                    <div class="form__btns">
                        <div class="form__btns-item">
                            <?php 
                                $tag="button";
                                $text="取消編輯";
                                $style="-transparent -outline";
                                include ("../../components/button.php");
                            ?>
                        </div>
                        <div class="form__btns-item">
                            <?php 
                                $tag="button";
                                $text="儲存編輯";
                                $style="";
                                include ("../../components/button.php");
                            ?>
                        </div>
                    </div>
                    <a href="">忘記密碼</a>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include('../../components/dev.php'); ?>
<?php include('../../components/footer.php'); ?>