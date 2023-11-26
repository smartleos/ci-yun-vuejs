<!-- NewsList.vue -->
<template>
    <div class="page-index__information">
        <div class="page-index__information-title">
            <MyTitle title="法會資訊" />
        </div>
        <div class="grid -cols-8-tablet -cols-4-mobile">
            <div class="page-index__information-card" v-for="news in newsItems" :key="news.id">
                <NewsCard :size="news.size" :imageUrl="news.imageUrl" :event="news.event" :date="news.date"
                    :title="news.title" :content="news.content" :moreUrl="news.moreUrl" />
            </div>
        </div>
        <div class="page-index__information-btn">
            <MyButton tag="a" url="/news" text="更多法會" />
        </div>
    </div>
</template>
  
<script setup>
import MyTitle from '~/components/MyTitle.vue';
import MyButton from '~/components/MyButton.vue';
import NewsCard from '~/components/NewsCard.vue';

const props = defineProps({
    newsItems: {
        type: Array,
        default: () => [],
    }
});
</script>
  
<style scoped>
/* CSS樣式 */
</style>
  