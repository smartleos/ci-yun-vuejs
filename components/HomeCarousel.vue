<template>
    <div class="page-index__kv-swiper">
        <div class="page-index__kv-swiper-clip">
            <div class="page-index__kv-swiper-wrapper swiper-wrapper">
                <figure class="swiper-slide" v-for="image in images" :key="image.id">
                    <img :src="$fullImagePath(image.url)" :alt="image.alt">
                </figure>
            </div>
            <div class="page-index__kv-swiper-pagination"></div>
        </div>
        <h2>慈雲寶塔，孝順的塔</h2>
        <figure class="page-index__kv-swiper-deco">
            <img :src="$fullImagePath('page/deco_cloud.png')" alt="">
        </figure>
    </div>
</template>

<script setup>
const props = defineProps({
    images: {
        type: Array,
        default: () => []
    }
});


</script>


<style scoped>
/* CSS樣式 */
</style>
