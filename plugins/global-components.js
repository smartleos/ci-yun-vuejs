// plugins/global-components.js
import MyButton from "~/components/MyButton.vue";
import MyTitle from "~/components/MyTitle.vue";

export default defineNuxtPlugin((nuxtApp) => {
  nuxtApp.vueApp.component("MyButton", MyButton);
  nuxtApp.vueApp.component("MyTitle", MyTitle);
});
