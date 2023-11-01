<template>
    <div class="svg-icon">
      <svg v-if="icon === 'title_cloud'" viewBox="0 0 100 100">
        <!-- title_cloud的SVG內容 -->
      </svg>
      <svg v-else-if="icon === 'header_logo'" viewBox="0 0 100 100">
        <!-- header_logo的SVG內容 -->
      </svg>
      <!-- 其他SVG選項 -->
    </div>
  </template>
  
  <script>
  export default {
    props: ['icon']
  }
  </script>
  
  <style scoped>
  /* 這裡放置CSS樣式 */
  </style>
  