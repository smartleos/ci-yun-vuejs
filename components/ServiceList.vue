<!--ServiceList.vue -->
<template>
    <div class="container grid">
        <div class="col-3-11-medium col-1-9-tablet col-1-5-mobile">
            <div class="page-index__service">
                <div class="page-index__service-title">
                    <MyTitle title="服務項目" />
                </div>
                <div class="grid -cols-8-tablet -cols-4-mobile">
                    <ServiceCard v-for="service in services" :key="service.id" :imgUrl="service.imgUrl"
                        :title="service.title" :description="service.description" />
                </div>
                <div class="page-index__service-btn">
                    <MyButton tag="a" url="/products" text="服務一覽" />
                </div>
            </div>
        </div>
    </div>
</template>
  
<script setup>
import MyTitle from '~/components/MyTitle.vue';
import MyButton from '~/components/MyButton.vue';
import ServiceCard from '~/components/ServiceCard.vue';
import { defineProps } from 'vue';

const props = defineProps({
    services: {
        type: Array,
        default: () => [],
    },
});
</script>
  
<style scoped>
/* CSS樣式 */
</style>
  