<template>
    <div class="page-index__video">
        <div class="page-index__video-title">
            <MyTitle :title="videoTitle" />
        </div>
        <vue-plyr class="page-index__video-plyr" :options="plyrOptions">
            <video id="index-player" data-plyr-provider="youtube" :data-plyr-embed-id="embedId"></video>
        </vue-plyr>
        <h3>{{ videoSubtitle }}</h3>
    </div>
</template>
  
<script setup>
import VuePlyr from 'vue-plyr';
import 'vue-plyr/dist/vue-plyr.css';
import MyTitle from '~/components/MyTitle.vue';
import { defineProps } from 'vue';

const props = defineProps({
    videoTitle: String,
    embedId: String,
    videoSubtitle: String
});

const plyrOptions = {
    // Plyr 的配置選項
};
</script>
  
<style scoped>
/* CSS 樣式 */
</style>
  