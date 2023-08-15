<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/bg.php'); ?>
<main class="page-member-order-information">
    <div class="container grid">
        <div class="page-member-order-information__wrapper col-4-10-tablet col-1-5-mobile">
            <div class="page-member-order-information__top">
                <h1>#000000</h1>
                <div class="page-member-order-information__top-btn">
                    <?php 
                        $tag="button";
                        $url="";
                        $text="取消訂單";
                        $style="-gray";
                        include ("../../components/button.php");
                    ?>
                </div>
            </div>
            <ul class="page-member-order-information__receipt">
                <li>
                    <p>購買人</p>
                    <p>王小明 先生</p>
                </li>
                <li>
                    <p>聯絡電話</p>
                    <p>0900123456</p>
                </li>
                <li>
                    <p>收件人</p>
                    <p>王小明 先生</p>
                </li>
                <li>
                    <p>收件地址</p>
                    <p>嘉義縣水上鄉南鄉村牛稠埔水上鄉南鄉村牛稠埔 54 號之4</p>
                </li>
                <li>
                    <p>付款方式</p>
                    <p>ATM付款</p>
                </li>
                <li>
                    <p>訂單狀態</p>
                    <p>已完成</p>
                </li>
                <li>
                    <p>付款狀態</p>
                    <p>已付款</p>
                </li>
                <li>
                    <p>訂購日期</p>
                    <p>2022/04/18</p>
                </li>
                <li>
                    <p>訂購總金額（含運費）</p>
                    <p>$200</p>
                </li>
            </ul>
            <ul class="page-member-order-information__card">
                <li class="page-member-order-information__card-item">
                    <div class="page-member-order-information__card-item-information">
                        <div class="page-member-order-information__card-item-information-row">
                            <figure>
                                <img src="<?php echo image_dir();?>testimg/08.jpeg" alt="">
                            </figure>
                            <div class="page-member-order-information__card-item-information-row-content">
                                <h4>對年第二、第三年精緻代拜組</h4>
                                <p>規格：規格 A</p>
                                <p>數量：3</p>
                                <span>NT＄5000</span>
                            </div>
                        </div>
                    </div>
                    <div class="page-member-order-information__card-item-btn">
                        <?php 
                            $tag="button";
                            $url="";
                            $text="展開祈福人資訊";
                            $style="";
                            include ("../../components/button.php");
                        ?>
                    </div>
                    <div class="page-member-order-information__card-item-message">
                        <?php get_svg('notice') ?>
                        <p>祈福人資訊填寫完成</p>
                    </div>
                    <ul class="page-member-order-information__card-item-list">
                        <li class="page-member-order-information__card-item-list-item">
                            <span>1</span>
                            <div class="page-member-order-information__card-item-list-item-col">
                                <h5>先人姓名：王大明</h5>
                                <ul>
                                    <li>先人忌日（農曆）：四月初二</li>
                                    <li>先人生日（農曆）：三月初八</li>
                                    <li>陽上報恩人姓名：王小明</li>
                                </ul>
                            </div>
                            <div class="page-member-order-information__card-item-list-item-btn">
                                <button>刪除</button>
                                <button>編輯</button>
                            </div>
                        </li>
                        <li class="page-member-order-information__card-item-list-item">
                            <span>2</span>
                            <div class="page-member-order-information__card-item-list-item-col">
                                <h5>先人姓名：王大明</h5>
                                <ul>
                                    <li>先人忌日（農曆）：四月初二</li>
                                    <li>先人生日（農曆）：三月初八</li>
                                    <li>陽上報恩人姓名：王小明</li>
                                </ul>
                            </div>
                            <div class="page-member-order-information__card-item-list-item-btn">
                                <button>刪除</button>
                                <button>編輯</button>
                            </div>
                        </li>
                        <li class="page-member-order-information__card-item-list-item">
                            <span>3</span>
                            <div class="page-member-order-information__card-item-list-item-col">
                                <h5>先人姓名：王大明</h5>
                                <ul>
                                    <li>先人忌日（農曆）：四月初二</li>
                                    <li>先人生日（農曆）：三月初八</li>
                                    <li>陽上報恩人姓名：王小明</li>
                                </ul>
                            </div>
                            <div class="page-member-order-information__card-item-list-item-btn">
                                <button>刪除</button>
                                <button>編輯</button>
                            </div>
                        </li>
                        <button>
                            ＋ 新增祈福人資訊
                        </button>
                    </ul>
                </li>
                <li class="page-member-order-information__card-item -success">
                    <div class="page-member-order-information__card-item-information">
                        <div class="page-member-order-information__card-item-information-row">
                            <figure>
                                <img src="<?php echo image_dir();?>testimg/08.jpeg" alt="">
                            </figure>
                            <div class="page-member-order-information__card-item-information-row-content">
                                <h4>對年第二、第三年精緻代拜組</h4>
                                <p>規格：規格 A</p>
                                <p>數量：3</p>
                                <span>NT＄5000</span>
                            </div>
                        </div>
                    </div>
                    <div class="page-member-order-information__card-item-btn">
                        <?php 
                            $tag="button";
                            $url="";
                            $text="展開祈福人資訊";
                            $style="";
                            include ("../../components/button.php");
                        ?>
                    </div>
                    <div class="page-member-order-information__card-item-message">
                        <?php get_svg('notice') ?>
                        <p>祈福人資訊填寫完成</p>
                    </div>
                    <ul class="page-member-order-information__card-item-list">
                        <li class="page-member-order-information__card-item-list-item">
                            <span>1</span>
                            <div class="page-member-order-information__card-item-list-item-col">
                                <h5>先人姓名：王大明</h5>
                                <ul>
                                    <li>先人忌日（農曆）：四月初二</li>
                                    <li>先人生日（農曆）：三月初八</li>
                                    <li>陽上報恩人姓名：王小明</li>
                                </ul>
                            </div>
                            <div class="page-member-order-information__card-item-list-item-btn">
                                <button>刪除</button>
                                <button>編輯</button>
                            </div>
                        </li>
                        <li class="page-member-order-information__card-item-list-item">
                            <span>2</span>
                            <div class="page-member-order-information__card-item-list-item-col">
                                <h5>先人姓名：王大明</h5>
                                <ul>
                                    <li>先人忌日（農曆）：四月初二</li>
                                    <li>先人生日（農曆）：三月初八</li>
                                    <li>陽上報恩人姓名：王小明</li>
                                </ul>
                            </div>
                            <div class="page-member-order-information__card-item-list-item-btn">
                                <button>刪除</button>
                                <button>編輯</button>
                            </div>
                        </li>
                        <li class="page-member-order-information__card-item-list-item">
                            <span>3</span>
                            <div class="page-member-order-information__card-item-list-item-col">
                                <h5>先人姓名：王大明</h5>
                                <ul>
                                    <li>先人忌日（農曆）：四月初二</li>
                                    <li>先人生日（農曆）：三月初八</li>
                                    <li>陽上報恩人姓名：王小明</li>
                                </ul>
                            </div>
                            <div class="page-member-order-information__card-item-list-item-btn">
                                <button>刪除</button>
                                <button>編輯</button>
                            </div>
                        </li>
                        <button>
                            ＋ 新增祈福人資訊
                        </button>
                    </ul>
                </li>
                <li class="page-member-order-information__card-item -alert">
                    <div class="page-member-order-information__card-item-information">
                        <div class="page-member-order-information__card-item-information-row">
                            <figure>
                                <img src="<?php echo image_dir();?>testimg/08.jpeg" alt="">
                            </figure>
                            <div class="page-member-order-information__card-item-information-row-content">
                                <h4>對年第二、第三年精緻代拜組</h4>
                                <p>規格：規格 A</p>
                                <p>數量：3</p>
                                <span>NT＄5000</span>
                            </div>
                        </div>
                    </div>
                    <div class="page-member-order-information__card-item-btn">
                        <?php 
                            $tag="button";
                            $url="";
                            $text="查看祈福人資訊";
                            $style="";
                            include ("../../components/button.php");
                        ?>
                    </div>
                    <div class="page-member-order-information__card-item-message">
                        <?php get_svg('notice') ?>
                        <p>您有未填寫的祈福人資訊</p>
                    </div>
                    <ul class="page-member-order-information__card-item-list">
                        <li class="page-member-order-information__card-item-list-item">
                            <span>1</span>
                            <div class="page-member-order-information__card-item-list-item-col">
                                <h5>先人姓名：王大明</h5>
                                <ul>
                                    <li>先人忌日（農曆）：四月初二</li>
                                    <li>先人生日（農曆）：三月初八</li>
                                    <li>陽上報恩人姓名：王小明</li>
                                </ul>
                            </div>
                            <div class="page-member-order-information__card-item-list-item-btn">
                                <button>刪除</button>
                                <button>編輯</button>
                            </div>
                        </li>
                        <li class="page-member-order-information__card-item-list-item">
                            <span>2</span>
                            <div class="page-member-order-information__card-item-list-item-col">
                                <h5>先人姓名：王大明</h5>
                                <ul>
                                    <li>先人忌日（農曆）：四月初二</li>
                                    <li>先人生日（農曆）：三月初八</li>
                                    <li>陽上報恩人姓名：王小明</li>
                                </ul>
                            </div>
                            <div class="page-member-order-information__card-item-list-item-btn">
                                <button>刪除</button>
                                <button>編輯</button>
                            </div>
                        </li>
                        <li class="page-member-order-information__card-item-list-item">
                            <span>3</span>
                            <div class="page-member-order-information__card-item-list-item-col">
                                <h5>先人姓名：王大明</h5>
                                <ul>
                                    <li>先人忌日（農曆）：四月初二</li>
                                    <li>先人生日（農曆）：三月初八</li>
                                    <li>陽上報恩人姓名：王小明</li>
                                </ul>
                            </div>
                            <div class="page-member-order-information__card-item-list-item-btn">
                                <button>刪除</button>
                                <button>編輯</button>
                            </div>
                        </li>
                        <button>
                            ＋ 新增祈福人資訊
                        </button>
                    </ul>
                </li>
            </ul>
            <ul class="page-member-order-information__bottom">
                <li>
                    <p>寄送方式</p>
                    <p>方式1</p>
                </li>
                <li>
                    <p>運費</p>
                    <p>0</p>
                </li>
                <li>
                    <p>總計</p>
                    <p>＄400</p>
                </li>
            </ul>
            <div class="page-member-order-information__btn">
                <?php 
                    $tag="a";
                    $url="/member/order";
                    $text="返回訂單列表";
                    $style="-transparent";
                    include ("../../components/button.php");
                ?>
            </div>
        </div>
    </div>
</main>
<?php include('../../components/dev.php'); ?>
<?php include('../../components/footer.php'); ?>