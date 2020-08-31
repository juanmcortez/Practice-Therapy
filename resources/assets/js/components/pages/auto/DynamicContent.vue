<template>
    <div class="content">
        <h1 class="mt-4" v-html="pageTitle"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <router-link :to="{ name: 'dashboard' }" class>Dashboard</router-link>
            </li>
            <li class="breadcrumb-item active" v-html="pageTitle"></li>
        </ol>
        <div class="card mb-4" v-html="pageContent"></div>
    </div>
</template>

<script>
export default {
    name: "",
    data() {
        return {
            pageTitle: "",
            pageContent:
                "<div class='card-body'><p class='mb-0'>Molestias accusamus non pariatur debitis. Labore exercitationem quod cupiditate illum temporibus harum ut perferendis. Iusto beatae quasi sed error consequatur.</p></div>",
        };
    },
    beforeMount() {
        this.pageTitle = this.$route.meta.title;
        this.name = this.$route.name;
    },
    beforeUpdate() {
        this.name = this.$route.name;
        this.pageTitle = this.$route.meta.title;
    },
};
</script>
