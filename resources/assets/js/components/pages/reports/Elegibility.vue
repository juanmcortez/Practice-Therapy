<template>
    <div class="content">
        <h1 class="mt-4" v-html="pageTitle"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <router-link :to="{ name: 'dashboard' }" class>Dashboard</router-link>
            </li>
            <li class="breadcrumb-item active" v-html="pageTitle"></li>
        </ol>
        <p>&nbsp;</p>
    </div>
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
};
</script>
