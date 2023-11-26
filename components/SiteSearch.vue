<template>
  <div :class="['header__search container grid', { '-active': isActive }]">
    <form class="header__search-wrapper col-5-9-medium col-2-8-tablet col-1-5-mobile">
      <label for="seach">全站搜尋</label>
      <input type="text" id="seach" name="seach" placeholder="請輸入 ...">
      <div class="header__search-wrapper-btns">
        <div class="header__search-wrapper-btns-item" id="cancel_search" @click="cancelSearch">
          <!-- 使用 v-bind 動態綁定屬性 -->
          <MyButton :tag="cancelButton.tag" :url="cancelButton.url" :target="cancelButton.target"
            :text="cancelButton.text" :style="cancelButton.style" />
        </div>
        <div class="header__search-wrapper-btns-item">
          <!-- 使用 v-bind 動態綁定屬性 -->
          <MyButton :tag="submitButton.tag" :url="submitButton.url" :target="submitButton.target"
            :text="submitButton.text" :style="submitButton.style" />
        </div>
      </div>
    </form>
  </div>
</template>
  
<script>
export default {
  props: {
    isActive: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      // 定義取消按鈕的數據
      cancelButton: {
        tag: 'button',
        url: '',
        target: '',
        text: '取消',
        style: '-outline'
      },
      // 定義提交按鈕的數據
      submitButton: {
        tag: 'a',
        url: '/search',
        target: '',
        text: '送出',
        style: ''
      }
    };
  },
  methods: {
    cancelSearch(event) {
      event.preventDefault();
      this.$emit('update:isActive', false);
    }
  }
};
</script>
  