<template>
    <header class="header">
      <div class="container">
        <div class="grid">
          <div class="col-1-6-medium col-4-6-tablet col-2-4-mobile header__logo">
            <!-- 這裡可以用Vue Router的<router-link>來替代 -->
            <router-link to="/">
              <!-- 使用SvgIcon組件來顯示SVG -->
              <SvgIcon :icon="'header_logo'" />
            </router-link>
          </div>
          <!-- 省略其他部分，以節省空間 -->
        </div>
      </div>
    </header>
  </template>
  
  <script>
  // 引入SvgIcon組件
  import SvgIcon from './SvgIcon.vue';
  
  export default {
    components: {
      SvgIcon
    },
    // 這裡可以放置methods, computed等
  }
  </script>
  
  <style scoped>
  /* 這裡放置CSS樣式 */
  </style>
  