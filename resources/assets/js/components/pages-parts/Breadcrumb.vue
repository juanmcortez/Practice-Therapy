<template>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" v-if="typeof secndlvl === 'undefined'">
            <li class="breadcrumb-item">
                <router-link :to="{ name: 'dashboard' }">Dashboard</router-link>
            </li>
            <li
                v-if="typeof firsturl === 'undefined'"
                class="breadcrumb-item active"
                aria-current="page"
                v-html="firstlvl"
            ></li>
            <li v-else class="breadcrumb-item" aria-current="page">
                <router-link :to="{ name: firsturl }" v-html="firstlvl"></router-link>
            </li>
        </ol>
        <ol class="breadcrumb" v-else>
            <li class="breadcrumb-item">
                <router-link :to="{ name: 'dashboard' }">Dashboard</router-link>
            </li>
            <li
                v-if="typeof firsturl === 'undefined'"
                class="breadcrumb-item active"
                aria-current="page"
                v-html="firstlvl"
            ></li>
            <li v-else class="breadcrumb-item" aria-current="page">
                <router-link :to="{ name: firsturl }" v-html="firstlvl"></router-link>
            </li>
            <li
                v-if="typeof secndurl === 'undefined'"
                class="breadcrumb-item active"
                aria-current="page"
                v-html="secndlvl"
            ></li>
            <li v-else class="breadcrumb-item" aria-current="page">
                <router-link :to="{ name: secndurl }" v-html="secndlvl"></router-link>
            </li>
        </ol>
    </nav>
</template>
<script>
export default {
    name: "Breadcrumb",
    props: {
        firstlvl: String,
        firsturl: String,
        secndlvl: String,
        secndurl: String,
    },
};
</script>
