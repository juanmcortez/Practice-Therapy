<template>
    <div :class="newClass+' mainlayout'">
        <navbar @toggle="sideBar()"></navbar>

        <div id="PTLayoutSidebar">
            <div id="PTLayoutSidebar_nav">
                <sidebar></sidebar>
            </div>

            <div id="PTLayoutSidebar_content">
                <main>
                    <div class="container-fluid">
                        <transition name="fade" mode="out-in">
                            <router-view :key="$route.path" class="view"></router-view>
                        </transition>
                    </div>
                </main>
                <footbar></footbar>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from "../layout-parts/Navbar";
import Sidebar from "../layout-parts/Sidebar";
import Footer from "../layout-parts/Footer";

export default {
    name: "PracticeTherapy",
    components: {
        navbar: Navbar,
        sidebar: Sidebar,
        footbar: Footer,
    },
    data() {
        return {
            newClass: "",
        };
    },
    methods: {
        sideBar() {
            this.newClass == "PT-sidenav-toggled"
                ? (this.newClass = "")
                : (this.newClass = "PT-sidenav-toggled");
        },
    },
};
</script>
