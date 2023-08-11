<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<style>
    <?php include('../../assets/scss/main.css'); ?>
</style>
<?php include('../../components/bg.php'); ?>
<main class="page-member-verify">
    <div class="container grid">
        <div class="page-member-verify__wrapper col-5-9-tablet col-1-5-mobile">
            <div class="page-member-verify__content">
                <div class="page-member-verify__content-title">
                    <?php 
                        $title="手機簡訊驗證";
                        include ("../../components/title.php");
                    ?>
                </div>
                <form class="form">
                    <div class="form__input -require">
                        <label for="code">驗證碼</label>
                        <div>
                            <input type="text" id="code" placeholder="請輸入驗證碼">
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
                                $style="";
                                include ("../../components/button.php");
                            ?>
                        </div>
                    </div>
                </form>
                <?php 
                    $tag="button";
                    $text="再次發送驗證碼";
                    $style="-transparent";
                    include ("../../components/button.php");
                ?>
            </div>
        </div>
    </div>
</main>
<?php include('../../components/dev.php'); ?>
<?php include('../../components/footer.php'); ?>