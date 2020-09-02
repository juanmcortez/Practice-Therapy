<template>
    <h1 class="my-3" v-html="value"></h1>
</template>
<script>
export default {
    name: "H1",
    props: {
        value: String,
    },
};
</script>
