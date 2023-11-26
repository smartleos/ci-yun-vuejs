<!--MyButton.vue-->
<template>
    <component :is="tag || 'a'" :class="`button ${style}`" :href="url" :target="target">
        <p>{{ text }}</p>
    </component>
</template>
  
<script>
export default {
    props: {
        tag: {
            type: String,
            default: null
        },
        style: {
            type: String,
            default: ''
        },
        url: {
            type: String,
            default: '#'
        },
        target: {
            type: String,
            default: '_self'
        },
        text: {
            type: String,
            required: true
        }
    }
};
</script>
  