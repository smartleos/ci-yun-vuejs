<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<style>
    <?php include('../../assets/scss/main.css'); ?>
</style>
<?php include('../../components/bg.php'); ?>
<main class="page-member-reset-password">
    <div class="container grid">
        <div class="page-member-reset-password__wrapper col-5-9-medium">
            <div class="page-member-reset-password__content">
                <h2>忘記密碼</h2>
                <p>請輸入您的手機號碼，我們將會寄送修改密碼信件到您的手機簡訊</p>
                <form class="form">
                    <div class="form__input -require">
                        <label for="password">新密碼</label>
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
                        <label for="password_confirm">再次輸入新密碼</label>
                        <div class="-password">
                            <?php get_svg('lock') ?>
                            <input type="password" id="password_confirm" placeholder="請輸入您的新密碼 ...">
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
                                $text="送出";
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