<!-- index.vue -->
<template>
    <main class="page-index">
        <PopupWindow ref="popup" :imageUrl="popupImageUrl" />
        <HomeCarousel :images="carouselImages" />
        <div class="container grid">
            <div class="col-3-11-medium col-1-9-tablet col-1-5-mobile">
                <Announcement :images="announcementes" />
                <NewsList :newsItems="newsListSrc" />
                <div class="page-index__banner">
                    <img src="imgs/page/deco_cloud.png" alt="">
                    <h2>慈雲寶塔，</h2>
                    <h2>孝順的塔</h2>
                    <img src="imgs/page/deco_cloud.png" alt="">
                </div>
                <ServiceList :services="servicesData" />
                <!-- <Navigation :images="navigationImages" /> -->
                <!-- <ClientOnly>
                    <VideoPlayer videoTitle="活動影片" embedId="pXi2vI-OSow" videoSubtitle="109年度中元法會 活動紀錄" />
                </ClientOnly> -->
            </div>
        </div>
    </main>
</template>
  
<script setup>
import { ref, onMounted } from 'vue';
import { useRoute } from 'vue-router';
import { useHead } from '@vueuse/head';
import HomeCarousel from '~/components/HomeCarousel.vue';
import PopupWindow from '~/components/PopupWindow.vue';
import Announcement from '~/components/Announcement.vue';
import NewsList from '~/components/NewsList.vue';
import ServiceList from '~/components/ServiceList.vue';
// import Navigation from '~/components/Navigation.vue';
// import VideoPlayer from '~/components/VideoPlayer.vue';
import { useMainStore } from '@/stores/main';

const store = useMainStore();
const route = useRoute();
const carouselImages = ref([]);
const announcementes = ref([]);
const newsListSrc = ref([]);
const servicesData = ref([]);
const navigationImages = ref([]);

let pageMeta = ref({
    title: '預設標題',
    meta: [
        { name: 'description', content: '預設描述' },
        { name: 'keywords', content: '預設關鍵字' },
        { property: 'og:title', content: '慈雲寶塔' },
        { property: 'og:description', content: '測試資料~~' }
    ]
});

async function fetchPageMeta(category) {
    if (!category) {
        // 沒有提供 category 參數時使用預設值
        console.error('沒有提供 category 參數時使用預設值');
        return;
    }
    try {
        const response = await fetch(`https://localhost:3380/api/indexCategory/${category}`, {
            headers: {
                Authorization: `Bearer ${store.jwtToken}`
            }
        });
        pageMeta.value = await response.json();
    } catch (error) {
        console.error('Get Head Info API error:', error);
    }
}

// 輪播圖片的請求
async function fetchCarouselImages() {
    try {
        const response = await fetch('https://localhost:3380/api/HomeCarousel', {
            headers: {
                Authorization: `Bearer ${store.jwtToken}`
            }
        });
        carouselImages.value = await response.json();
    } catch (error) {
        console.error('Get CarouselImage API error:', error);
        carouselImages.value = [
            { id: 1, url: '/testimg/01.jpg', alt: 'Image 1' },
            { id: 2, url: '/testimg/02.jpg', alt: 'Image 2' },
            { id: 3, url: '/testimg/03.jpg', alt: 'Image 3' }
        ];
    }
}

// 公告資料的請求
async function fetchAnnouncementes() {
    try {
        const response = await fetch('https://localhost:3380/api/Announcement', {
            headers: {
                Authorization: `Bearer ${store.jwtToken}`
            }
        });
        announcementes.value = await response.json();
    } catch (error) {
        console.error('Get Announcementes API error:', error);
        announcementes.value = [
            { id: 1, url: '/testimg/06.jpeg', alt: 'Image 6', date: '2021-09-01', title: '第一組測試資料的抬頭' },
            { id: 2, url: '/testimg/07.jpeg', alt: 'Image 7', date: '2023-11-25', title: '第二組測試資料的抬頭' },
            { id: 3, url: '/testimg/08.jpeg', alt: 'Image 8', date: '2023-12-13', title: '第三組測試資料的抬頭' }
        ];
    }
}

// 最新消息的請求
async function fetchNewList() {
    try {
        const response = await fetch('https://localhost:3380/api/NewsList', {
            headers: {
                Authorization: `Bearer ${store.jwtToken}`
            }
        });
        newsListSrc.value = await response.json();
    } catch (error) {
        console.error('Get NewsList API error:', error);
        newsListSrc.value = [
            { id: 1, imageUrl: 'testimg/08.jpeg', moreUrl: "/news/112年度清明祭祀法會", title: '112年度清明祭祀法會', size: 'large', event: "祈福法會", date: "國曆｜2023.03.31 - 04.02", content: '慈雲寶塔前天台廣場。線上報名：https://reurl.cc/Dmd53R，三節代拜線上訂購表單：https://reurl.cc/52j3kq。注意事項：（一）法會期間，塔位區勿擺設極品，並請勿持香進入大殿。（二）法會當天紙錢統一集中安排燒化。（三）法會期間電腦暫不開放使用。（四）如遇颱風影響，延期日期將公佈於官網。（五）法會期間現場提供金紙、紙紮、祭品販售服務。' },
            { id: 2, imageUrl: 'testimg/08.jpeg', moreUrl: "/news/112年度清明祭祀法會", title: '112年度過年點燈', size: 'small', event: "祈福法會", date: "國曆｜2023.03.31 - 04.02", content: '慈雲寶塔前天台廣場。線上報名：https://reurl.cc/Dmd53R，三節代拜線上訂購表單：https://reurl.cc/52j3kq。注意事項：（一）法會期間，塔位區勿擺設極品，並請勿持香進入大殿。（二）法會當天紙錢統一集中安排燒化。（三）法會期間電腦暫不開放使用。（四）如遇颱風影響，延期日期將公佈於官網。（五）法會期間現場提供金紙、紙紮、祭品販售服務。' },
            { id: 3, imageUrl: 'testimg/08.jpeg', moreUrl: "/news/112年度清明祭祀法會", title: '113年祈福大法會', size: 'small', event: "祈福法會", date: "國曆｜2023.03.31 - 04.02", content: '慈雲寶塔前天台廣場。線上報名：https://reurl.cc/Dmd53R，三節代拜線上訂購表單：https://reurl.cc/52j3kq。注意事項：（一）法會期間，塔位區勿擺設極品，並請勿持香進入大殿。（二）法會當天紙錢統一集中安排燒化。（三）法會期間電腦暫不開放使用。（四）如遇颱風影響，延期日期將公佈於官網。（五）法會期間現場提供金紙、紙紮、祭品販售服務。' }
        ];
    }
}

// 服務項目的請求
async function fetchServices() {
    try {
        const response = await fetch('https://localhost:3380/api/Services', {
            headers: {
                Authorization: `Bearer ${store.jwtToken}`
            }
        });
        servicesData.value = await response.json();
    } catch (error) {
        console.error('Get Services API error:', error);
        servicesData.value = [
            { id: 1, imgUrl: '/testimg/14.jpg', title: '法會服務', description: '我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。' },
            { id: 2, imgUrl: '/testimg/14.jpg', title: '祈福服務', description: '我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。' },
            { id: 3, imgUrl: '/testimg/14.jpg', title: '祭祀服務', description: '我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。' },
            { id: 4, imgUrl: '/testimg/14.jpg', title: '其他服務', description: '我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。' }
        ];
    }
}

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

// 請求視頻數據
// async function fetchVideoData() {
//     try {
//         const response = await fetch('https://localhost:3380/api/VideoData', {
//             headers: { Authorization: `Bearer ${store.jwtToken}` }
//         });
//         const data = await response.json();
//         if (data.title) videoData.value.title = data.title;
//         if (data.embedId) videoData.value.embedId = data.embedId;
//         if (data.subtitle) videoData.value.subtitle = data.subtitle;
//     } catch (error) {
//         console.error('Get VideoData API error:', error);
//         // 使用預設值
//     }
// }
const popup = ref(null);
const popupImageUrl = ref('https://source.unsplash.com/random/1024x768');

// 在伺服器端和客戶端都會執行的代碼
onMounted(() => {
    fetchCarouselImages();
    fetchPageMeta(route.query.category);
    fetchAnnouncementes();
    fetchNewList();
    fetchServices();
    fetchNavigationImages();
    // fetchVideoData();
    popup.value.show(); // 打開彈出窗口
    // if (process.client) {
    //     const player = new Player(videoContainer.value, {
    //         type: 'video',

    //     });
    //     player.source = {
    //         type: 'video',
    //         sources: [
    //             {
    //                 src: 'https://www.youtube.com/watch?v=pXi2vI-OSow',
    //                 provider: 'youtube',
    //             },
    //         ],
    //     };
    // }
});

// 使用 useHead 設置頁面頭部資訊
useHead({
    title: pageMeta.value.title,
    meta: pageMeta.value.meta
});
</script>
  