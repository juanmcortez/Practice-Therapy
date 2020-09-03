<template>
    <div class="content">
        <h1 class="mt-4" v-html="pageTitle"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <router-link :to="{ name: 'dashboard' }" class>Dashboard</router-link>
            </li>
            <li class="breadcrumb-item active" v-html="pageTitle"></li>
        </ol>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="text-center">
                    <th class="text-left">Full Name</th>
                    <th colspan="2">Phone</th>
                    <th>SSN</th>
                    <th>Date of Birth</th>
                    <th>Accession #</th>
                    <th>External ID</th>
                    <th>PID</th>
                    <th>Last Srv Date</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center" v-for="patient in patientList" :key="patient.pid">
                    <td
                        class="text-left"
                        v-html="patient.identity.last_name+', '+patient.identity.first_name+' '+patient.identity.middle_name"
                    ></td>
                    <td v-html="patient.contact.phone"></td>
                    <td class="text-capitalize border-left-0" v-html="patient.contact.type"></td>
                    <td v-html="patient.identity.ssn"></td>
                    <td v-html="patient.identity.dob"></td>
                    <td v-html="getAccession(patient.selection)"></td>
                    <td v-html="patient.ext_id"></td>
                    <td v-html="patient.pid"></td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>
        <small
            class="text-muted"
            v-html="'Total: '+totalnum+' | Viewing: '+perpages+' | Pages: '+totalpag"
        ></small>
    </div>
</template>

<script>
export default {
    name: "",
    data() {
        return {
            pageTitle: "",
            patientList: "",
            totalnum: 0,
            perpages: 0,
            totalpag: 0,
        };
    },
    methods: {
        getPatientList() {
            axios.get("/api/patients/list").then((response) => {
                this.patientList = response.data.data;
                this.totalnum = response.data.total;
                this.perpages = response.data.per_page;
                this.totalpag = response.data.last_page;
            });
        },
        getAccession(check) {
            for (let key in check) {
                if (check[key].type == "acce_numb") return check[key].selection;
            }
            return "--";
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
