<template>
    <div class="announcement-card">
      <p>{{ date }}</p>
      <h4>{{ title }}</h4>
      <div class="announcement-card__btn" :data-url="imageDir + img_url">
        <span>
          <SvgIcon :icon="'arrow_right'" />
        </span>
        <p>閱讀更多</p>
      </div>
    </div>
  </template>
  
  <script>
  import SvgIcon from './SvgIcon.vue';
  
  export default {
    props: ['date', 'title', 'img_url'],
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
  