<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<style>
    <?php include('../../assets/scss/main.css'); ?>
</style>
<?php include('../../components/bg.php'); ?>
<main class="page-member-register-success">
    <div class="container grid">
        <div class="page-member-register-success__wrapper col-5-9-medium">
            <div class="page-member-register-success__content">
                <h2>您已成功註冊！</h2>
                <div class="page-member-register-success__content-btn">
                    <?php 
                        $tag="a";
                        $url="/member/information";
                        $text="前往會員頁面";
                        include ("../../components/button.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('../../components/dev.php'); ?>
<?php include('../../components/footer.php'); ?>