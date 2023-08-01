<?php include('function.php'); ?>
<?php include('components/header.php'); ?>
<style>
    <?php include('assets/scss/main.css'); ?>
</style>
<?php include('components/bg.php'); ?>
<main class="page-index">
	<div class="page-index__kv">
        <div class="page-index__kv-swiper">
            <div class="page-index__kv-swiper-clip">
                <div class="page-index__kv-swiper-wrapper swiper-wrapper">
                    <figure class="swiper-slide">
                        <img src="<?php image_dir() ?>testimg/01.jpg" alt="">
                    </figure>
                    <figure class="swiper-slide">
                        <img src="<?php image_dir() ?>testimg/02.jpg" alt="">
                    </figure>
                    <figure class="swiper-slide">
                        <img src="<?php image_dir() ?>testimg/03.jpg" alt="">
                    </figure>
                </div>
                <div class="page-index__kv-swiper-pagination"></div>
            </div>
            <h2>慈雲寶塔，孝順的塔</h2>
            <figure class="page-index__kv-swiper-deco">
                <img src="<?php image_dir() ?>page/deco_cloud.png" alt="">
            </figure>
            <figure class="page-index__kv-swiper-deco">
                <img src="<?php image_dir() ?>page/deco_cloud.png" alt="">
            </figure>
        </div>
    </div>
    <div class="container grid">
        <div class="col-3-11-medium">
            <div class="page-index__announcement grid -cols-8-medium">
                <h3 class="col-1-2-medium">重要公告</h3>
                <div class="page-index__announcement-wrapper col-2-9-medium">
                    <?php 
                        $date="2023.02.24";
                        $title="為配合祭拜時間，即日起寶塔營業時段調整為：每日 8:30~16:30";
                        $img_url= "testimg/06.jpeg";
                        include ("components/index/announcementCard.php");
                    ?>
                    <?php 
                        $date="2023.02.24";
                        $title="為配合祭拜時間，即日起寶塔營業時段調整為：每日 8:30~16:30";
                        $img_url="testimg/07.jpeg";
                        include ("components/index/announcementCard.php");
                    ?>
                </div>
            </div>
            <div class="page-index__information">
                <div class="page-index__information-title">
                    <?php 
                        $title="法會資訊";
                        include ("components/title.php");
                    ?>
                </div>
                <div class="grid -cols-8-medium">
                    <div class="page-index__information-card">
                        <?php 
                            $size="large";
                            $url="https://www.google.com/";
                            $target="_blank";
                            $img_url="testimg/08.jpeg";
                            $tag="祈福法會";
                            $date="國曆｜03.31 -  04.02";
                            $title="112年度清明祭祀法會";
                            $description="慈雲寶塔前天台廣場。線上報名：https://reurl.cc/Dmd53R，三節代拜線上訂購表單：https://reurl.cc/52j3kq。注意事項：（一）法會期間，塔位區勿擺設極品，並請勿持香進入大殿。（二）法會當天紙錢統一集中安排燒化。（三）法會期間電腦暫不開放使用。（四）如遇颱風影響，延期日期將公佈於官網。（五）法會期間現場提供金紙、紙紮、祭品販售服務。";
                            include ("components/index/informationCard.php");
                        ?>
                    </div>
                    <div class="page-index__information-card">
                        <?php 
                            $size="small";
                            $url="https://www.google.com/";
                            $target="_blank";
                            $img_url="testimg/08.jpeg";
                            $tag="祈福法會";
                            $date="國曆｜03.31 -  04.02";
                            $title="112年度清明祭祀法會";
                            $description="慈雲寶塔前天台廣場。線上報名：https://reurl.cc/Dmd53R，三節代拜線上訂購表單：https://reurl.cc/52j3kq。注意事項：（一）法會期間，塔位區勿擺設極品，並請勿持香進入大殿。（二）法會當天紙錢統一集中安排燒化。（三）法會期間電腦暫不開放使用。（四）如遇颱風影響，延期日期將公佈於官網。（五）法會期間現場提供金紙、紙紮、祭品販售服務。";
                            include ("components/index/informationCard.php");
                        ?>
                    </div>
                    <div class="page-index__information-card">
                        <?php 
                            $size="small";
                            $url="https://www.google.com/";
                            $target="_blank";
                            $img_url="testimg/08.jpeg";
                            $tag="祈福法會";
                            $date="國曆｜03.31 -  04.02";
                            $title="112年度清明祭祀法會";
                            $description="慈雲寶塔前天台廣場。線上報名：https://reurl.cc/Dmd53R，三節代拜線上訂購表單：https://reurl.cc/52j3kq。注意事項：（一）法會期間，塔位區勿擺設極品，並請勿持香進入大殿。（二）法會當天紙錢統一集中安排燒化。（三）法會期間電腦暫不開放使用。（四）如遇颱風影響，延期日期將公佈於官網。（五）法會期間現場提供金紙、紙紮、祭品販售服務。";
                            include ("components/index/informationCard.php");
                        ?>
                    </div>
                </div>
                <div class="page-index__information-btn">
                    <?php 
                        $url="https://www.google.com/";
                        $target="_blank";
                        $text="更多法會";
                        include ("components/button.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="page-index__banner">
        <h2>慈雲寶塔，</h2>
        <h2>孝順的塔</h2>
    </div>
    <div class="container grid">
        <div class="col-3-11-medium">
            <div class="page-index__service">
                <div class="page-index__service-title">
                    <?php 
                        $title="服務項目";
                        include ("components/title.php");
                    ?>
                </div>
                <div class="grid -cols-8-medium">
                    <div class="page-index__service-card">
                        <?php 
                            $img_url="testimg/14.jpg";
                            $title="服務項目";
                            $description="我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。";
                            include ("components/index/serviceCard.php");
                        ?>
                    </div>
                    <div class="page-index__service-card">
                        <?php 
                            $img_url="testimg/14.jpg";
                            $title="服務項目";
                            $description="我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。";
                            include ("components/index/serviceCard.php");
                        ?>
                    </div>
                    <div class="page-index__service-card">
                        <?php 
                            $img_url="testimg/14.jpg";
                            $title="服務項目";
                            $description="我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。";
                            include ("components/index/serviceCard.php");
                        ?>
                    </div>
                    <div class="page-index__service-card">
                        <?php 
                            $img_url="testimg/14.jpg";
                            $title="服務項目";
                            $description="我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。";
                            include ("components/index/serviceCard.php");
                        ?>
                    </div>
                </div>
                <div class="page-index__service-btn">
                    <?php 
                        $url="https://www.google.com/";
                        $target="_blank";
                        $text="更多法會";
                        include ("components/button.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="page-index__navigation">
        <div class="page-index__navigation-wrapper swiper-wrapper">
            <figure class="swiper-slide">
                <img src="<?php image_dir() ?>testimg/01.jpg" alt="">
            </figure>
            <figure class="swiper-slide">
                <img src="<?php image_dir() ?>testimg/02.jpg" alt="">
            </figure>
            <figure class="swiper-slide">
                <img src="<?php image_dir() ?>testimg/03.jpg" alt="">
            </figure>
        </div>
        <div class="page-index__navigation-bottom">
            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 586 96"><path fill-rule="evenodd" clip-rule="evenodd" d="M585.619 95.944H0C68.145 37.558 173.973.056 292.81.056c118.836 0 224.664 37.502 292.809 95.888Z" fill="#fff"/></svg>
            <h2>園區導覽</h2>
            <div class="page-index__navigation-bottom-control">
                <div class="page-index__navigation-bottom-control-prev">
                    <span>
                        <?php get_svg('arrow_left') ?>
                    </span>
                    <p>前一張</p>
                </div>
                <div class="page-index__navigation-bottom-pagination"></div>
                <div class="page-index__navigation-bottom-control-next">
                    <p>後一張</p>
                    <span>
                        <?php get_svg('arrow_right') ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="page-index__navigation-btn">
            <?php 
                $url="https://www.google.com/";
                $target="_blank";
                $text="更多法會";
                include ("components/button.php");
            ?>
        </div>
    </div>
    <div class="container grid">
        <div class="col-4-10-medium">
            <div class="page-index__video">
                <div class="page-index__video-title">
                    <?php 
                        $title="活動影片";
                        include ("components/title.php");
                    ?>
                </div>
                <div class="page-index__video-plyr plyr__video-embed" id="index-player" data-plyr-provider="youtube" data-plyr-embed-id="dQw4w9WgXcQ"></div>
                <h3>109年度中元法會 活動紀錄</h3>
            </div>
        </div>
    </div>
</main>
<?php include('components/dev.php'); ?>
<?php include('components/footer.php'); ?>