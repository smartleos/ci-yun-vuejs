// stores/main.js
import { defineStore } from "pinia";

export const useMainStore = defineStore("main", {
  state: () => ({
    jwtToken: "leo123456789",
    imagePath: "/imgs/",
  }),
  actions: {
    setJwtToken(token) {
      this.jwtToken = token;
    },
    setImagePath(path) {
      this.imagePath = path;
    },
  },
});
