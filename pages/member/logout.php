<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/bg.php'); ?>
<main class="page-member-logout">
    <div class="container grid">
        <div class="page-member-logout__wrapper col-5-9-tablet col-1-5-mobile">
            <div class="page-member-logout__content">
                <h2>您已成功登出！</h2>
                <div class="page-member-logout__content-btn">
                    <?php 
                        $tag="a";
                        $url="/";
                        $text="回首頁";
                        include ("../../components/button.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- <?php include('../../components/dev.php'); ?> -->
<?php include('../../components/footer.php'); ?>