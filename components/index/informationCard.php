<div class="information-card <?php echo '-'.$size;?>">
    <figure>
        <img src="<?php echo image_dir().$img_url;?>" alt="">
    </figure>
    <div class="information-card-row">
        <span><?php echo $tag;?></span>
        <p><?php echo $date;?></p>
    </div>
    <h4><?php echo $title;?></h4>
    <p><?php echo $description;?></p>
    <hr>
    <a href="<?php echo $url;?>" target="<?php echo $target;?>" class="information-card-btn">
        <span>
            <?php get_svg('arrow_right') ?>
        </span>
        <p>閱讀更多</p>
    </a>
</div>