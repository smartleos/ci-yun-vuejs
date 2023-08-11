<?php include('../function.php'); ?>
<?php include('../components/header.php'); ?>
<style>
    <?php include('../assets/scss/main.css'); ?>
</style>
<?php include('../components/bg.php'); ?>
<main class="page-news">
    <?php
        $img_url="testimg/01.jpg";
        $title="最新消息";
        include ("../components/banner.php");
    ?>
    <div class="page-news__select">
        <select name="news_categories">
            <option value="all">所有消息</option>
            <option value="最新消息">最新消息</option>
            <option value="最新消息2">最新消息2</option>
        </select>
        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 8"><path d="M1.41.59 6 5.17 10.59.59 12 2 6 8 0 2 1.41.59Z" fill="#9A7412"/></svg>
    </div>
    <div class="container grid">
        <div class="page-news__wrapper col-3-11-tablet col-1-5-mobile">
            <?php 
                $size="large";
                include ("../components/news/card.php");
            ?>
            <?php 
                $size="large";
                include ("../components/news/card.php");
            ?>
            <?php 
                $size="large";
                include ("../components/news/card.php");
            ?>
            <?php 
                $size="large";
                include ("../components/news/card.php");
            ?>
            <?php 
                $size="large";
                include ("../components/news/card.php");
            ?>
            <?php 
                $size="large";
                include ("../components/news/card.php");
            ?>
        </div>
    </div>
</main>
<?php include('../components/dev.php'); ?>
<?php include('../components/footer.php'); ?>