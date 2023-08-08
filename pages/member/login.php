<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<style>
    <?php include('../../assets/scss/main.css'); ?>
</style>
<?php include('../../components/bg.php'); ?>
<main class="page-member-login">
    <div class="container grid">
        <div class="page-member-login__wrapper col-5-9-medium">
            <div class="page-member-login__content">
                <div class="page-member-login__content-title">
                    <?php 
                        $title="會員登入";
                        include ("../../components/title.php");
                    ?>
                </div>
                <form class="page-member-login__form form">
                    <div class="form__input -require -notice">
                        <label for="username">手機號碼/E-mail 信箱</label>
                        <div>
                            <input type="text" id="username" placeholder="請輸入...">
                        </div>
                        <span>
                            <?php get_svg('notice') ?>您尚未輸入...
                        </span>
                    </div>
                    <div class="form__input -alert">
                        <label for="password">密碼</label>
                        <div>
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
                    <div class="form__checkbox -alert">
                        <div>
                            <input type="checkbox" id="remember">
                            <label for="remember">記住我</label>
                        </div>
                        <span>
                            <?php get_svg('notice') ?>請勾選...
                        </span>
                    </div>
                    <div class="form__btns">
                        <div class="form__btns-item">
                            <?php 
                                $tag="a";
                                $url="/member/register";
                                $text="註冊新帳戶";
                                $style="-transparent -outline";
                                include ("../../components/button.php");
                            ?>
                        </div>
                        <div class="form__btns-item">
                            <?php 
                                $tag="button";
                                $text="立即登入";
                                $style="";
                                include ("../../components/button.php");
                            ?>
                        </div>
                    </div>
                    <div class="form__or">
                        <p>OR</p>
                    </div>
                    <h3>以其他方式登入</h3>
                    <div class="form__social">
                        <div class="form__social-btn -google">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 20"><path d="M10.5 8.182v3.873h5.382a4.61 4.61 0 0 1-2.01 3.009l3.246 2.518c1.891-1.745 2.982-4.31 2.982-7.355 0-.709-.064-1.39-.182-2.045H10.5Z" fill="#4285F4"/><path d="m4.896 11.903-.732.56-2.591 2.019C3.218 17.745 6.59 20 10.5 20c2.7 0 4.963-.89 6.618-2.418l-3.246-2.518c-.89.6-2.027.963-3.372.963-2.6 0-4.81-1.754-5.6-4.118l-.004-.006Z" fill="#34A853"/><path d="M1.573 5.518A9.877 9.877 0 0 0 .5 10c0 1.618.39 3.136 1.073 4.482C1.573 14.49 4.9 11.9 4.9 11.9c-.2-.6-.318-1.236-.318-1.9 0-.664.118-1.3.318-1.9L1.573 5.518Z" fill="#FBBC05"/><path d="M10.5 3.982c1.473 0 2.782.509 3.827 1.49l2.864-2.863C15.455.991 13.2 0 10.5 0 6.59 0 3.218 2.245 1.573 5.518L4.9 8.1c.79-2.364 3-4.118 5.6-4.118Z" fill="#EA4335"/></svg>
                            <p>Google 登入</p>
                        </div>
                        <div class="form__social-btn -facebook">
                            <?php get_svg('facebook') ?>
                            <p>Facebook 登入</p>
                        </div>
                        <div class="form__social-btn -line">
                            <?php get_svg('line') ?>
                            <p>LINE 登入</p>
                        </div>
                    </div>
                    <p><?php get_svg('notice') ?>擁有帳號即表示你同意 <a href="">會員隱私條款</a></p>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include('../../components/dev.php'); ?>
<?php include('../../components/footer.php'); ?>