<!-- ServiceCard.vue -->
<template>
    <div class="page-index__service-card">
        <a class="service-card" :href="`/products-categories/${link}`">
            <figure>
                <img :src="$fullImagePath(imgUrl)" :alt="title">
            </figure>
            <h3>{{ title }}</h3>
            <hr>
            <p>{{ description }}</p>
        </a>
    </div>
</template>
  
<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    imgUrl: String,
    title: String,
    description: String,
    link: String,
});
</script>
  
<style scoped>
/* CSS樣式 */
</style>
  