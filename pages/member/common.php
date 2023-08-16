<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/bg.php'); ?>
<main class="page-member-common">
    <div class="container grid">
        <div class="page-member-common__wrapper col-3-11-tablet col-1-5-mobile">
            <?php 
                $active="common";
                include ("../../components/member/tab.php");
            ?>
            <?php 
                $title="常用祈福人資訊";
                include ("../../components/member/top.php");
            ?>
            <div class="page-member-common__content grid -cols-8-tablet -cols-4-mobile">
                <ul class="page-member-common__list col-2-8-tablet col-1-5-mobile -active">
                    <?php 
                        $tag="button";
                        $url="";
                        $text="＋ 新增祈福人資訊";
                        $style="-transparent";
                        include ("../../components/button.php");
                    ?>
                    <li>
                        <div class="page-member-common__list-content">
                            <h3>先人姓名：王大明</h3>
                            <p>先人忌日（農曆）：四月初二</p>
                        </div>
                        <div class="page-member-common__list-btn">
                            <?php 
                                $tag="button";
                                $url="";
                                $text="編輯";
                                $style="";
                                include ("../../components/button.php");
                            ?>
                        </div>
                    </li>
                    <li>
                        <div class="page-member-common__list-content">
                            <h3>先人姓名：王大明</h3>
                            <p>先人忌日（農曆）：四月初二</p>
                        </div>
                        <div class="page-member-common__list-btn">
                            <?php 
                                $tag="button";
                                $url="";
                                $text="編輯";
                                $style="";
                                include ("../../components/button.php");
                            ?>
                        </div>
                    </li>
                    <li>
                        <div class="page-member-common__list-content">
                            <h3>先人姓名：王大明</h3>
                            <p>先人忌日（農曆）：四月初二</p>
                        </div>
                        <div class="page-member-common__list-btn">
                            <?php 
                                $tag="button";
                                $url="";
                                $text="編輯";
                                $style="";
                                include ("../../components/button.php");
                            ?>
                        </div>
                    </li>
                    <li>
                        <div class="page-member-common__list-content">
                            <h3>先人姓名：王大明</h3>
                            <p>先人忌日（農曆）：四月初二</p>
                        </div>
                        <div class="page-member-common__list-btn">
                            <?php 
                                $tag="button";
                                $url="";
                                $text="編輯";
                                $style="";
                                include ("../../components/button.php");
                            ?>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="page-member-common__form">
                <form class="form -grid">
                    <div class="form__input -require">
                        <label for="ancestor_name">先人姓名 </label>
                        <div>
                            <input type="text" id="ancestor_name" placeholder="請輸入...">
                        </div>
                        <span>
                            <?php get_svg('notice') ?>您尚未輸入...
                        </span>
                    </div>
                    <div class="form__input">
                        <label for="ancestor_birthday">先人生日（農曆）</label>
                        <div>
                            <input type="text" id="ancestor_birthday" placeholder="請輸入...">
                        </div>
                        <span>
                            <?php get_svg('notice') ?>如需修改請聯絡客服人員
                        </span>
                    </div>
                    <div class="form__input">
                        <label for="ancestor_deathday">先人忌日（農曆）</label>
                        <div>
                            <input type="text" id="ancestor_deathday" placeholder="請輸入...">
                        </div>
                        <span>
                            <?php get_svg('notice') ?>您尚未輸入...
                        </span>
                    </div>
                    <div class="form__input -require">
                        <label for="name">陽上報恩人姓名</label>
                        <div>
                            <input type="text" id="name" placeholder="請輸入...">
                        </div>
                        <span>
                            <?php get_svg('notice') ?>您尚未輸入...
                        </span>
                    </div>
                    <div class="form__input">
                        <label for="birthday">陽上報恩人生日</label>
                        <div>
                            <input type="text" id="birthday" placeholder="請輸入...">
                        </div>
                        <span>
                            <?php get_svg('notice') ?>您尚未輸入...
                        </span>
                    </div>
                    <div class="form__input">
                        <label for="remark">備註</label>
                        <div>
                            <input type="text" id="remark" placeholder="請輸入...">
                        </div>
                        <span>
                            <?php get_svg('notice') ?>您尚未輸入...
                        </span>
                    </div>
                    <div class="col-1-3-tablet">
                        <?php 
                            $tag="button";
                            $url="";
                            $text="刪除資訊";
                            $style="-transparent -red";
                            include ("../../components/button.php");
                        ?>
                    </div>
                    <div class="form__btns">
                        <div class="form__btns-item">
                            <?php 
                                $tag="button";
                                $url="";
                                $text="取消編輯";
                                $style="-transparent -outline";
                                include ("../../components/button.php");
                            ?>
                        </div>
                        <div class="form__btns-item">
                            <?php 
                                $tag="button";
                                $url="";
                                $text="儲存編輯";
                                $style="";
                                include ("../../components/button.php");
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- <?php include('../../components/dev.php'); ?> -->
<?php include('../../components/footer.php'); ?>