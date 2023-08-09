<div class="member-top">
    <div class="member-top-title">
        <?php get_svg('title_cloud') ?>
        <h1><?php echo $title;?></h1>
    </div>
    <div class="member-top-btn">
        <?php 
            $tag="a";
            $url="/member/logout";
            $text="登出";
            $style="-red";
            include ("../../components/button.php");
        ?>
    </div>
</div>