<ul class="member-tab">
    <li>
        <?php 
            $tag="a";
            $url="/member/information";
            $text="會員資料";
            $style= $active=="information" ? "" : "-transparent -outline";
            include ("../../components/button.php");
        ?>
    </li>
    <li>
        <?php 
            $tag="a";
            $url="/member/order";
            $text="訂單查詢";
            $style= $active=="order" ? "" : "-transparent -outline";
            include ("../../components/button.php");
        ?>
    </li>
    <li>
        <?php 
            $tag="a";
            $url="/member/level";
            $text="會員等級";
            $style= $active=="level" ? "" : "-transparent -outline";
            include ("../../components/button.php");
        ?>
    </li>
    <li>
        <?php 
            $tag="a";
            $url="/member/common";
            $text="常用祈福人資訊";
            $style= $active=="common" ? "" : "-transparent -outline";
            include ("../../components/button.php");
        ?>
    </li>
    <li>
        <?php 
            $tag="a";
            $url="/member/coupon";
            $text="我的優惠券";
            $style= $active=="coupon" ? "" : "-transparent -outline";
            include ("../../components/button.php");
        ?>
    </li>
    <li>
        <?php 
            $tag="a";
            $url="/member/privacy";
            $text="隱私權/會員權益說明";
            $style= $active=="privacy" ? "" : "-transparent -outline";
            include ("../../components/button.php");
        ?>
    </li>
</ul>