<template>
    <Header />
    <Bg />
    <NuxtPage />
    <Footer />
</template>
  
<script>
import Header from '~/components/Header.vue';
import Footer from '~/components/Footer.vue';
import Bg from '~/components/Bg.vue';

export default {
    components: {
        Header,
        Bg,
        Footer
    }
};
</script>
  