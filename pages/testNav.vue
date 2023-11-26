<!--testNav-->
<template>
    <Navigation :images="navigationImages" />
</template>
<script setup>
import { ref, onMounted } from 'vue';
import Navigation from '~/components/Navigation.vue';

const navigationImages = ref([]);

// 請求園區導覽的圖片
async function fetchNavigationImages() {
    try {
        const response = await fetch('https://localhost:3380/api/Navigation', {
            headers: {
                Authorization: `Bearer ${store.jwtToken}`
            }
        });
        navigationImages.value = await response.json();
    } catch (error) {
        console.error('Get NavigationImages API error:', error);
        navigationImages.value = [
            '/testimg/01.jpg',
            '/testimg/02.jpg',
            '/testimg/03.jpg',
        ];
    }
}

onMounted(() => {

    fetchNavigationImages();
});

</script>