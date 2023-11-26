<!-- PopupWindow.vue -->
<template>
    <div v-if="isVisible" class="popup container -active">
        <div class="popup__bg" @click="close"></div>
        <div class="grid">
            <figure class="col-2-12-medium col-2-8-tablet col-1-5-mobile">
                <svg class="pop__close" @click="close">
                    <path
                        d="M15.364 17.485 9 11.121l-6.364 6.364-2.121-2.121L6.879 9 .515 2.636 2.636.515 9 6.879 15.364.515l2.121 2.121L11.121 9l6.364 6.364-2.121 2.121Z"
                        fill="#000" />
                </svg>
                <!-- 這裡不用$fullImagePath的原因是有可能是外部圖片，這是最底層，就不再處理連結前置符-->
                <img :src="imageUrl" alt="">
            </figure>
        </div>
    </div>
</template>
  
<script>
export default {
    props: {
        imageUrl: {
            type: String,
            required: true
        }
    },
    data() {
        return {
            isVisible: false
        };
    },
    methods: {
        show() {
            this.isVisible = true;
            document.body.style.overflow = 'hidden';
        },
        close() {
            this.isVisible = false;
            document.body.style.overflow = 'auto';
        }
    }
};
</script>
  
<style>
/* 彈出窗口的樣式 */
</style>
  