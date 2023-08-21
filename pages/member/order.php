<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/bg.php'); ?>
<main class="page-member-order">
    <div class="container grid">
        <div class="page-member-order__wrapper col-3-11-tablet col-1-5-mobile">
            <?php 
                $active="order";
                include ("../../components/member/tab.php");
            ?>
            <?php 
                $title="訂單查詢";
                include ("../../components/member/top.php");
            ?>
            <div class="page-member-order__order">
                <div class="page-member-order__order-date">
                    <div class="page-member-order__order-date-row">
                        <input type="date" name="order_form_date" id="order_form_date">
                        <p>～</p>
                        <input type="date" name="order_to_date" id="order_to_date">
                    </div>
                    <div class="page-member-order__order-date-btn">
                        <?php 
                            $tag="button";
                            $url="";
                            $text="查詢";
                            $style="";
                            include ("../../components/button.php");
                        ?>
                    </div>
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
<!-- <?php include('../../components/dev.php'); ?> -->
<?php include('../../components/footer.php'); ?>