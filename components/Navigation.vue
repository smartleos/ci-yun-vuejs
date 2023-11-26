<!--Navigation.vue-->
<template>
    <div class="page-index__navigation">
        <div class="page-index__navigation-wrapper swiper-wrapper">
            <swiper :options="swiperOptions">
                <swiper-slide v-for="(img, index) in images" :key="index">
                    <img :src="$fullImagePath(img)" alt="">
                </swiper-slide>
            </swiper>
        </div>
        <div class="page-index__navigation-bottom">
            <!-- SVG 和標題 -->
            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 586 96">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M585.619 95.944H0C68.145 37.558 173.973.056 292.81.056c118.836 0 224.664 37.502 292.809 95.888Z"
                    fill="#fff" />
            </svg>
            <h2>園區導覽</h2>
            <div class="page-index__navigation-bottom-control">
                <div class="page-index__navigation-bottom-control-prev">
                    <span>
                        <!-- 使用 NuxtIcon 替代 get_svg('arrow_left') -->
                        <nuxt-icon name="arrow_left" />
                    </span>
                    <p>前一張</p>
                </div>
                <div class="page-index__navigation-bottom-pagination"></div>
                <div class="page-index__navigation-bottom-control-next">
                    <p>後一張</p>
                    <span>
                        <!-- 使用 NuxtIcon 替代 get_svg('arrow_right') -->
                        <nuxt-icon name="arrow_right" />
                    </span>
                </div>
            </div>
        </div>
        <div class="page-index__navigation-btn">
            <!-- 使用 MyButton 組件 -->
            <MyButton tag="a" url="/about" text="完整導覽" />
        </div>
    </div>
</template>
  
<script setup>
import Swiper, { SwiperSlide } from 'swiper/vue'
import 'swiper/swiper-bundle.css';
import SwiperCore, { Autoplay, Pagination, Navigation } from 'swiper';
import { defineProps, onMounted, ref } from 'vue';
import MyButton from '~/components/MyButton.vue';

// 啟用 Swiper 需要的模組
SwiperCore.use([Autoplay, Pagination, Navigation]);


// Swiper 的相關配置可以在這裡進行
const props = defineProps({
    images: {
        type: Array,
        default: () => ['/imgs/testimg/01.jpg', '/imgs/testimg/02.jpg', '/imgs/testimg/03.jpg'],
    },
});

// Swiper 配置
const swiperOptions = {
    slidesPerView: 'auto',
    spaceBetween: 24,
    loop: true,
    centeredSlides: true,
    autoplay: {
        delay: 5000,
    },
    pagination: {
        el: '.page-index__navigation-bottom-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.page-index__navigation-bottom-control-next',
        prevEl: '.page-index__navigation-bottom-control-prev',
    },
};
</script>
  
<style scoped>
/* CSS樣式 */
</style>
  