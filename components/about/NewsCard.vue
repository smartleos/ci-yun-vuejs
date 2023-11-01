<template>
    <div :class="['news-card', '-' + size]">
      <figure>
        <img :src="imageDir + imgSrc" alt="">
      </figure>
      <div class="news-card-row">
        <span>{{ category }}</span>
        <p>{{ dateRange }}</p>
      </div>
      <h4>{{ title }}</h4>
      <hr class="-mobile">
      <p>{{ description }}</p>
      <hr class="-desktop">
      <router-link :to="readMoreLink" class="news-card__btn">
        <span>
          <SvgIcon :icon="'arrow_right'" />
        </span>
        <p>閱讀更多</p>
      </router-link>
    </div>
  </template>
  
  <script>
  import SvgIcon from './SvgIcon.vue';
  
  export default {
    props: ['size', 'imgSrc', 'category', 'dateRange', 'title', 'description', 'readMoreLink'],
    data() {
      return {
        imageDir: 'your_image_directory/'
      };
    },
    components: {
      SvgIcon
    }
  }
  </script>
  
  <style scoped>
  /* 這裡放置CSS樣式 */
  </style>
  