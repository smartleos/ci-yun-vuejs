<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<style>
    <?php include('../../assets/scss/main.css'); ?>
</style>
<?php include('../../components/bg.php'); ?>
<main class="page-member-order">
    <div class="container grid">
        <div class="page-member-order__wrapper col-3-11-medium">
            <ul class="page-member-order__tab">
                <li>
                    <?php 
                        $tag="a";
                        $url="/member/information";
                        $text="回首頁";
                        $style="-transparent -outline";
                        include ("../../components/button.php");
                    ?>
                </li>
                <li>
                    <?php 
                        $tag="a";
                        $url="/member/order";
                        $text="訂單查詢";
                        $style="";
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
            <div class="page-member-order__top">
                <div class="page-member-order__top-title">
                    <?php get_svg('title_cloud') ?>
                    <h1>訂單查詢</h1>
                </div>
                <div class="page-member-order__top-btn">
                    <?php 
                        $tag="a";
                        $url="/member/logout";
                        $text="登出";
                        $style="-red";
                        include ("../../components/button.php");
                    ?>
                </div>
            </div>
            <div class="page-member-order__order">
                <div class="page-member-order__order-select">
                    <select name="products_categories">
                        <option value="日期區間" selected disabled>日期區間</option>
                        <option value="日期區間1">日期區間</option>
                    </select>
                    <?php get_svg('down') ?>
                </div>
                <div class="page-member-order__order-list">
                    <?php  include ("../../components/member/orderCard.php");?>
                    <?php  include ("../../components/member/orderCard.php");?>
                    <?php  include ("../../components/member/orderCard.php");?>
                    <?php  include ("../../components/member/orderCard.php");?>
                    <?php  include ("../../components/member/orderCard.php");?>
                    <?php  include ("../../components/member/orderCard.php");?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('../../components/dev.php'); ?>
<?php include('../../components/footer.php'); ?>