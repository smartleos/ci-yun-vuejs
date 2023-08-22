<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/bg.php'); ?>
<main class="news-single">
    <figure>
        <img src="<?php image_dir() ?>testimg/01.jpg" alt="">
    </figure>
    <div class="container grid">
        <div class="news-single__wrapper col-3-11-medium col-1-9-tablet col-1-5-mobile">
            <div class="news-single__wrapper-top">
                <h1>112年度新春法會</h1>
                <div class="news-single__wrapper-top-tags">
                    <span class="news-single__wrapper-top-tags-category">祈福法會</span>
                    <span class="news-single__wrapper-top-tags-date">國曆｜2023.03.31 -  04.02</span>
            </div>
            </div>
            <div class="news-single__wrapper-paragraph">
                <div class="news-single__wrapper-paragraph-text">
                    <h1>對年第二年、第三年代拜 (H1)</h1>
                    <h2>對年第二年、第三年代拜 (H2)</h2>
                    <h3>對年第二年、第三年代拜 (H3)</h3>
                    <p>祭拜時間為每個月<b>農曆初二</b>，如需訂購，請提早三天下單點選查看整年度法會時間表請提早三天下單點選查看整年度法會時間表：<a>超連結樣式</a>
    
                        PS. 祭品均需要時間準備，請提早下訂，逾期將無法受理，敬請見諒請務必填先寫《精緻代拜》訂購表單後再點選【加入購物車】
                    </p>
                </div>
                <div class="news-single__wrapper-paragraph-quote">
                    祭拜時間為每個月農曆初二。如需訂購，請提早三天下單。祭拜時間為每個月農曆初二。如需訂購，請提早三天下單
                </div>
                <ol>
                    <li>祭拜時間為每個月農曆初二，如需訂購，請提早三天下單</li>
                    <li>點選查看整年度法會時間表</li>
                    <li> 祭品均需要時間準備，請提早下訂</li>
                    <li>請務必填先寫《精緻代拜》訂購表單後再點選【加入購物車】</li>
                </ol>
                <ul>
                    <li>祭拜時間為每個月農曆初二，如需訂購，請提早三天下單</li>
                    <li>點選查看整年度法會時間表</li>
                    <li> 祭品均需要時間準備，請提早下訂</li>
                    <li>請務必填先寫《精緻代拜》訂購表單後再點選【加入購物車】</li>
                </ul>
            </div>
            <div class="news-single__wrapper-share">
                <p>分享至：</p>
                <div class="news-single__wrapper-share-icons">
                    <button id="news_facebook">
                        <?php get_svg('facebook') ?>
                    </button>
                    <button id="news_line">
                        <?php get_svg('line') ?>
                    </button>
                    <button id="news_twitter">
                        <?php get_svg('twitter') ?>
                    </button>
                </div>
            </div>
            <div class="news-single__wrapper-btn">
                <?php 
                    $tag="a";
                    $url="/news";
                    $target="";
                    $text="回到列表頁";
                    $style="";
                    include ("../../components/button.php");
                ?>
            </div>
        </div>
    </div>
</main>
<!-- <?php include('../../components/dev.php'); ?> -->
<?php include('../../components/footer.php'); ?>