<template>
    <div>
      <Header />
      <Bg />
      <main class="page-index">
        <div class="page-index__banner">
          <img :src="`${imageDir}page/deco_cloud.png`" alt="">
          <h2>慈雲寶塔，</h2>
          <h2>孝順的塔</h2>
          <img :src="`${imageDir}page/deco_cloud.png`" alt="">
        </div>
        <div class="page-index__information-card">
          <NewsCard :size="'large'" />
        </div>
        <!-- 其他內容 -->
      </main>
      <Footer />
    </div>
  </template>
  
  <script>
  import Header from './Header.vue';
  import Bg from './Bg.vue';
  import Footer from './Footer.vue';
  import NewsCard from './NewsCard.vue';  // 引入NewsCard組件
  
  export default {
    components: {
      Header,
      Bg,
      Footer,
      NewsCard  // 註冊NewsCard組件
    },
    data() {
      return {
        imageDir: 'your_image_directory/'  // 這裡可以是一個從後端API獲取的變量
      };
    }
  }
  </script>
  
  <style scoped>
  /* 這裡放置CSS樣式 */
  </style>
  