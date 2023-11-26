// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  plugins: ['~/plugins/pinia.js','~/plugins/global-components.js','~/plugins/fullImagePath.js'],
  modules: [
    // 添加 nuxt-icons 模組
    'nuxt-icons'
  ],
  css: [
    '~/assets/css/global.css'
  ]
})
