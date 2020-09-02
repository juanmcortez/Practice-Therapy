<template>
    <div :class="newClass+' mainlayout'">
        <navbar @toggle="sideBar()"></navbar>

        <loadbar :percentage="percentage"></loadbar>

        <div id="PTLayoutSidebar">
            <div id="PTLayoutSidebar_nav">
                <sidebar></sidebar>
            </div>

            <div id="PTLayoutSidebar_content">
                <main>
                    <div class="container-fluid">
                        <alertbar
                            :popType="msgtype"
                            :popName="msgtitle"
                            :popMessage="msgcontent"
                            :pOpacity="msgview"
                        ></alertbar>

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
import Loadbar from "../layout-parts/Loadbar";
import Alertbar from "../layout-parts/Toast";
import Sidebar from "../layout-parts/Sidebar";
import Footer from "../layout-parts/Footer";

// Shared
const store = {
    data: {
        percentage: 0,
    },
};
// Shared

export default {
    name: "PracticeTherapy",
    components: {
        navbar: Navbar,
        loadbar: Loadbar,
        alertbar: Alertbar,
        sidebar: Sidebar,
        footbar: Footer,
    },
    data() {
        return {
            newClass: "",
            msgtype: "info",
            msgtitle: "",
            msgcontent: "",
            msgview: 0,
            percentage: 0,
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
