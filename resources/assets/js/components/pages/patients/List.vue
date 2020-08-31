<template>
    <div class="content">
        <h1 class="mt-4" v-html="pageTitle"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <router-link :to="{ name: 'dashboard' }" class>Dashboard</router-link>
            </li>
            <li class="breadcrumb-item active" v-html="pageTitle"></li>
        </ol>
        <table class="table table-bordered table-hover table-striped table-responsive">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Ext. PID</th>
                    <th>PID</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="patient in patientList" :key="patient.pid">
                    <td v-html="patient.p_name"></td>
                    <td v-html="patient.p_dob"></td>
                    <td v-html="patient.p_extpid"></td>
                    <td v-html="patient.pid"></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "",
    data() {
        return {
            pageTitle: "",
            patientList: "",
        };
    },
    methods: {
        getPatientList() {
            axios.get("/api/patients/list").then((response) => {
                this.patientList = response.data;
            });
        },
    },
    watch: {
        // call again the method if the route changes
        $route: "getPatientList",
    },
    beforeMount() {
        this.pageTitle = this.$route.meta.title;
        this.name = this.$route.name;
        this.getPatientList();
    },
};
</script>
