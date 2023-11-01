<template>
    <div :class="['title', style]">
      <!-- 使用SvgIcon組件來顯示SVG -->
      <SvgIcon :icon="'title_cloud'" />
      <h3>{{ title }}</h3>
    </div>
  </template>
  
  <script>
  // 引入SvgIcon組件
  import SvgIcon from './SvgIcon.vue';
  
  export default {
    props: ['style', 'title'],
    components: {
      SvgIcon
    }
  }
  </script>
  
  <style scoped>
  /* 這裡放置CSS樣式 */
  </style>
  