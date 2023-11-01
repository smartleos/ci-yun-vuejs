<template>
    <div class="bg">
      <div class="bg__wrapper">
        <figure class="bg__top -right">
          <img :src="imageDir + 'page/deco_cloud.png'" alt="">
        </figure>
        <!-- 省略其他部分，以節省空間 -->
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        // 假設 imageDir 是一個從後端API獲取的變量
        imageDir: 'your_image_directory/'
      };
    }
  }
  </script>
  
  <style scoped>
  /* 這裡放置CSS樣式 */
  </style>
  