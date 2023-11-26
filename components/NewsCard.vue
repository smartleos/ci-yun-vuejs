<!-- NewsCard.vue -->
<template>
    <div class="news-card" :class="`-${size}`">
        <figure>
            <img :src="$fullImagePath(imageUrl)" alt="">
        </figure>
        <div class="news-card-row">
            <span>{{ event }}</span>
            <p>{{ date }}</p>
        </div>
        <h4>{{ title }}</h4>
        <hr class="-mobile">
        <p>{{ content }}</p>
        <hr class="-desktop">
        <a :href="moreUrl" class="news-card__btn">
            <span>
                <nuxt-icon name="arrow_right" />
            </span>
            <p>閱讀更多</p>
        </a>
    </div>
</template>
  
<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    size: {
        type: String,
        default: 'small'
    },
    imageUrl: String,
    event: String,
    date: String,
    title: String,
    content: String,
    moreUrl: String
});


</script>
  
<style scoped>
/* 這裡加入你的 CSS 樣式 */
</style>
  