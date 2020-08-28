<template>
    <div class="bg-dark text-light border-right border-dark" id="sidebar-wrapper">
        <div class="sidebar-heading" @click="toogleSidebar()">Start Bootstrap</div>
        <div class="list-group list-group-flush">
            <router-link
                active-class="active"
                exact
                :to="{ name: 'home' }"
                class="list-group-item list-group-item-action"
            >Home</router-link>
            <router-link
                active-class="active"
                exact
                :to="{ name: 'about' }"
                class="list-group-item list-group-item-action"
            >About</router-link>
            <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
        </div>
    </div>
</template>
<script>
export default {
    name: "SideBar",
    methods: {
        toogleSidebar() {
            this.$emit("toggle");
        },
    },
};
</script>
