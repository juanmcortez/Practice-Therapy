<template>
    <div id="wrapper" :class="'d-flex '+newClass">
        <!-- Sidebar -->
        <sidebar @toggle="sideBar()"></sidebar>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <navbar></navbar>

            <div class="container-fluid">
                <transition name="fade" mode="out-in">
                    <router-view class="view"></router-view>
                </transition>
            </div>

            <footbar></footbar>
        </div>
        <!-- /#page-content-wrapper -->
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
            this.newClass == "toggled"
                ? (this.newClass = "")
                : (this.newClass = "toggled");
        },
    },
};
</script>
