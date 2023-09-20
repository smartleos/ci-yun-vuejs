<div class="products-add-cart grid container">
    <div class="products-add-cart__wrapper col-5-9-medium col-2-8-tablet col-1-5-mobile">
        <div class="products-add-cart__close">
            <?php get_svg('close') ?>
        </div>
        <div class="products-add-cart__top">
            <figure>
                <img src="<?php image_dir() ?>testimg/01.jpg" alt="">
            </figure>
            <div class="products-add-cart__top-information">
                <h4>忌日精緻代拜組忌日精緻代拜組</h4>
                <div class="products-add-cart__top-information-tags">
                    <div class="products-add-cart__top-information-tags-category">精緻代拜組</div>
                    <div class="products-add-cart__top-information-tags-promote">限時特價</div>
                </div>
                <div class="products-add-cart__top-information-price">
                    <span class="products-add-cart__top-information-price-original">＄5,000</span>
                    <span class="products-add-cart__top-information-price-now">＄4,000</span>
                </div>
            </div>
        </div>
        <p>請選擇品項與數量</p>
        <div class="products-add-cart__specification">
            <span>
                <input type="radio" id="a" name="specification" value="a" checked>
                <label for="a">
                    品項 A
                </label>
            </span>
            <span>
                <input type="radio" id="b" name="specification" value="b">
                <label for="b">
                    品項 B
                </label>
            </span>
            <span>
                <input type="radio" id="c" name="specification" value="c">
                <label for="c">
                    品項 C
                </label>
            </span>
        </div>
        <div class="products-add-cart__bottom">
            <div class="products-add-cart__bottom-item">
                <?php get_svg('minus') ?>
                <input type="number" value="1">
                <?php get_svg('plus') ?>
            </div>
            <div class="products-add-cart__bottom-item">
                <?php 
                    $tag="button";
                    $url="";
                    $target="";
                    $text="立即結帳";
                    $style="-red";
                    if (file_exists('./components/button.php')) {
                        include('./components/button.php');
                    } elseif (file_exists('../components/button.php')) {
                        include('../components/button.php');
                    } elseif (file_exists('../../components/button.php')) {
                        include('../../components/button.php');
                    }
                ?>
            </div>
        </div>
    </div>
</div>