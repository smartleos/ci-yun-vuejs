<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/bg.php'); ?>
<main class="page-member-forgot">
    <div class="container grid">
        <div class="page-member-forgot__wrapper col-5-9-medium col-3-7-tablet col-1-5-mobile">
            <div class="page-member-forgot__content">
                <h2>忘記密碼</h2>
                <p>請輸入您的手機號碼，我們將會寄送修改密碼信件到您的手機簡訊</p>
                <form class="form">
                    <div class="form__input">
                        <label for="phone">手機號碼</label>
                        <div>
                            <input type="text" id="phone" placeholder="請輸入...">
                        </div>
                        <span>
                            <?php get_svg('notice') ?>您尚未輸入...
                        </span>
                    </div>
                    <div class="form__btns">
                        <div class="form__btns-item">
                            <?php 
                                $tag="a";
                                $url="/member/forgot-send";
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
<!-- <?php include('../../components/dev.php'); ?> -->
<?php include('../../components/footer.php'); ?>