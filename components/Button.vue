<template>
    <component
      :is="tag"
      :class="['button', style]"
      :href="url"
      :target="target"
    >
      <p>{{ text }}</p>
    </component>
  </template>
  
  <script>
  export default {
    props: ['tag', 'style', 'url', 'target', 'text'],
  }
  </script>
  
  <style scoped>
  /* 這裡放置CSS樣式 */
  </style>
  