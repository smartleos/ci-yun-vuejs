<template>
    <NuxtLayout>
        <NuxtPage />
    </NuxtLayout>
</template>
  
<script setup>
import { useHead } from '@vueuse/head';

useHead({
    title: '慈雲寶塔',
    meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        { name: 'theme-color', content: '#9A7412' },
        { name: 'description', content: 'A simple HTML5 Template for new projects.' },
        { name: 'author', content: 'SitePoint' },
        { property: 'og:title', content: '慈雲寶塔' },
        { property: 'og:type', content: 'website' },
        { property: 'og:url', content: 'https://www.sitepoint.com/a-basic-html5-template/' },
        { property: 'og:description', content: 'A simple HTML5 Template for new projects.' },
        { property: 'og:image', content: 'image.png' }
    ],
    link: [
        { rel: 'apple-touch-icon', href: '/apple-touch-icon.png' },
        { rel: 'stylesheet', href: 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css' },
        { rel: 'stylesheet', href: 'https://cdn.plyr.io/3.7.8/plyr.css' },
    ],
    script: [
        { src: 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', type: 'text/javascript' },
        { src: 'https://cdn.plyr.io/3.7.8/plyr.js', type: 'text/javascript' },
        // { src: '/js/jquery-3.6.0.min.js', type: 'text/javascript', body: true },
        // { src: '/js/jquery.validate.min.js', type: 'text/javascript', body: true },
        // { src: '/js/scripts.js', type: 'text/javascript', body: true },
        // { src: '/js/tools.js', type: 'text/javascript', body: true }
    ]
});
</script>
  