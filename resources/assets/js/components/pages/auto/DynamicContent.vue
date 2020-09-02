<template>
    <div class="content">
        <pageh1 :value="h1value"></pageh1>
        <breadcrumb :firstlvl="h1value"></breadcrumb>
        <div class="card mb-4" v-html="pageContent"></div>
    </div>
</template>

<script>
import PageH1 from "../../pages-parts/H1";
import Breadcrumb from "../../pages-parts/Breadcrumb";
export default {
    name: "",
    components: {
        pageh1: PageH1,
        breadcrumb: Breadcrumb,
    },
    data() {
        return {
            h1value: "",
            pageContent:
                "<div class='card-body'><p class='mb-0'>Molestias accusamus non pariatur debitis. Labore exercitationem quod cupiditate illum temporibus harum ut perferendis. Iusto beatae quasi sed error consequatur.</p></div>",
        };
    },
    beforeMount() {
        this.name = this.$route.name;
        this.h1value = this.$route.meta.title;
    },
    beforeUpdate() {
        this.name = this.$route.name;
        this.h1value = this.$route.meta.title;
    },
};
</script>
