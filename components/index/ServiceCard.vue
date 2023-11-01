<template>
    <router-link :to="`/products-categories/${category}`" class="service-card">
      <figure>
        <img :src="imageDir + imgSrc" alt="">
      </figure>
      <h3>{{ title }}</h3>
      <hr>
      <p>{{ description }}</p>
    </router-link>
  </template>
  
  <script>
  export default {
    props: ['category', 'imgSrc', 'title', 'description'],
    data() {
      return {
        imageDir: 'your_image_directory/'
      };
    }
  }
  </script>
  
  <style scoped>
  /* 這裡放置CSS樣式 */
  </style>
  