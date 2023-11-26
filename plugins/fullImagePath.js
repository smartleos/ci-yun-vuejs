// plugins/fullImagePath.js
import { useMainStore } from "@/stores/main";

export default defineNuxtPlugin((nuxtApp) => {
  nuxtApp.vueApp.config.globalProperties.$fullImagePath = (imageFile) => {
    const store = useMainStore();
    return `${store.imagePath}${imageFile}`;
  };
});
