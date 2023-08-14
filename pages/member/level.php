<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<style>
    <?php include('../../assets/scss/main.css'); ?>
</style>
<?php include('../../components/bg.php'); ?>
<main class="page-member-level">
    <div class="container grid">
        <div class="page-member-level__wrapper col-3-11-tablet col-1-5-mobile">
            <?php 
                $active="level";
                include ("../../components/member/tab.php");
            ?>
            <?php 
                $title="會員等級";
                include ("../../components/member/top.php");
            ?>
            <div class="page-member-level__content grid -cols-8-tablet -cols-4-mobile">
                <div class="page-member-level__text col-2-8-tablet col-1-5-mobile">
                    <p>您目前的等級：一般會員</p>
                    <p>再消費 $5000 可升級VIP會員</p>
                </div>
                <ul class="page-member-level__list col-2-8-tablet col-1-5-mobile">
                    <li>
                        <h3>弘孝VIP會員</h3>
                        <p>紙紮品，法會8折優惠。</p>
                    </li>
                    <li>
                        <h3>一般會員</h3>
                        <p>沒有特定折扣（除公司有特價活動）</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>
<?php include('../../components/dev.php'); ?>
<?php include('../../components/footer.php'); ?>