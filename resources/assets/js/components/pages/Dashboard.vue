<template>
    <div class="content"></div>
</template>

<script>
export default {
    name: "",
    data() {
        return {
            pageTitle: "",
        };
    },
    beforeMount() {
        this.pageTitle = this.$route.meta.title;
        this.name = this.$route.name;
    },
    mounted() {
        /*axios.get("/api/products").then((response) => {
            this.products = response.data.data;
        });*/
    },
};
</script>
