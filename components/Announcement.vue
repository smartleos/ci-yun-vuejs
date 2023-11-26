<!-- Announcement.vue -->
<template>
  <PopupWindow ref="popup" :imageUrl="popupImageUrl" />
  <div class="page-index__announcement">
    <div class="page-index__announcement-title">
      <MyTitle title="重要公告" />
    </div>
    <div class="page-index__announcement-wrapper" v-for="image in images" :key="image.id">
      <div class="announcement-card">
        <p>{{ image.date }}</p>
        <h4>{{ image.title }}</h4>
        <div class="announcement-card__btn" @click="openPopup($fullImagePath(image.url))">
          <span>
            <nuxt-icon name="arrow_right" />
          </span>
          <p>閱讀更多</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import PopupWindow from '~/components/PopupWindow.vue';

const popup = ref(null);
const popupImageUrl = ref('');

const openPopup = (url) => {
  popupImageUrl.value = url;
  popup.value.show();
};

const props = defineProps({
  images: {
    type: Array,
    default: () => [],
  },
});

</script>

<style scoped>
/* CSS樣式 */
</style>
