<template>
    <div class="content">
        <h1 class="mt-4" v-html="pageTitle"></h1>
        <ol id="breadcrumb" class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <router-link :to="{ name: 'dashboard' }" class>Dashboard</router-link>
            </li>
            <li class="breadcrumb-item active" v-html="pageTitle"></li>
        </ol>
        <transition name="fade">
            <div class="row" v-show="loadedTable">
                <div class="col-12 table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr class="bg-dark text-light">
                                <th
                                    class="openSearch text-center"
                                    data-toggle="collapse"
                                    data-target="#searchRow"
                                    aria-expanded="false"
                                    aria-controls="searchRow"
                                >
                                    <i class="fa fa-caret-down"></i>
                                </th>
                                <th
                                    v-for="column in table.columns"
                                    :key="column.field"
                                    :class="'text-'+column.align+' text-uppercase'"
                                    v-html="column.label"
                                ></th>
                            </tr>
                            <tr class="collapse" id="searchRow">
                                <th>&nbsp;</th>
                                <th v-for="column in table.columns" :key="column.field">
                                    <input
                                        type="text"
                                        class="form-control"
                                        readonly
                                        v-if="(column.searchable == false) ? '' : 'readonly'"
                                        @keyup="searchMonitor($event)"
                                        :name="column.field+'_search'"
                                    />
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="patient in table.rows" :key="patient.pid">
                                <td class="text-center">
                                    <router-link
                                        :to="{ name: 'ledger', params: { pid: patient.pid } }"
                                        class="btn-link text-secondary"
                                    >
                                        <i class="fa fa-eye"></i>
                                    </router-link>
                                </td>
                                <td
                                    v-for="column in table.columns"
                                    :key="column.field"
                                    :class="'text-'+column.align"
                                    v-html="extractSubelement({'field': patient[column.field], 'index': column.index})"
                                ></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-12 col-md-6">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-sm justify-content-start">
                            <li class="page-item">
                                <p
                                    class="text-muted small"
                                    :aria-label="'From '+pagination.from+' to '+pagination.to+' of '+pagination.total+' patients.'"
                                    v-html="'From <strong>'+pagination.from+'</strong> to <strong>'+pagination.to+'</strong> of <strong>'+pagination.total+'</strong> patients.'"
                                ></p>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-12 col-md-6">
                    <nav aria-label="navigation">
                        <ul class="pagination pagination-sm justify-content-end">
                            <li
                                :class="'page-item '+((pagination.current_page==1) ? 'disabled' : '')"
                            >
                                <a
                                    href
                                    class="page-link"
                                    v-on:click.prevent="updateTablePagination(1)"
                                    aria-label="First"
                                >
                                    <span aria-hidden="true">&lsaquo;</span>
                                    <span class="sr-only">First</span>
                                </a>
                            </li>
                            <li
                                :class="'page-item '+((pagination.current_page==1) ? 'disabled' : '')"
                            >
                                <a
                                    href
                                    class="page-link"
                                    v-on:click.prevent="updateTablePagination(pagination.current_page-1)"
                                    aria-label="Previous"
                                >
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>

                            <li
                                :class="(pageNumber == pagination.current_page) ? 'page-item page active' : 'page-item page'"
                                v-for="pageNumber in pagination.last_page"
                                :key="pageNumber"
                            >
                                <a
                                    v-if="Math.abs(pageNumber - pagination.current_page) < 3"
                                    href
                                    class="page-link"
                                    v-on:click.prevent="updateTablePagination(pageNumber)"
                                    v-html="pageNumber"
                                ></a>
                            </li>

                            <li
                                :class="'page-item '+((pagination.current_page==pagination.last_page) ? 'disabled' : '')"
                            >
                                <a
                                    href
                                    class="page-link"
                                    v-on:click.prevent="updateTablePagination(pagination.current_page+1)"
                                    aria-label="Next"
                                >
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                            <li
                                :class="'page-item '+((pagination.current_page==pagination.last_page) ? 'disabled' : '')"
                            >
                                <a
                                    href
                                    class="page-link"
                                    v-on:click.prevent="updateTablePagination(pagination.last_page)"
                                    aria-label="First"
                                >
                                    <span aria-hidden="true">&rsaquo;</span>
                                    <span class="sr-only">Last</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </transition>
    </div>
</template>

<style>
table tr th.openSearch {
    cursor: pointer;
}
table tr th:first-of-type,
table tr td:first-of-type {
    width: 3rem;
}
</style>

<script>
export default {
    name: "",
    data() {
        return {
            pageTitle: "",
            patientList: "",
            loadedTable: false,
            table: {
                filter: "",
                rows: [],
                columns: [
                    {
                        label: "Full Name",
                        field: "full_name",
                        align: "left",
                        searchable: true,
                    },
                    {
                        label: "&nbsp;",
                        field: "avatar",
                        align: "center",
                        searchable: false,
                    },
                    {
                        label: "Phone",
                        field: "contact",
                        index: "phone",
                        align: "center",
                        searchable: false,
                    },
                    {
                        label: "SSN",
                        field: "identity",
                        index: "ssn",
                        align: "center",
                        searchable: false,
                    },
                    {
                        label: "Date of Birth",
                        field: "identity",
                        index: "dob",
                        align: "center",
                        searchable: true,
                    },
                    {
                        label: "Accession #",
                        field: "selection",
                        index: "selection",
                        align: "center",
                        searchable: true,
                    },
                    {
                        label: "External ID",
                        field: "ext_id",
                        align: "center",
                        searchable: true,
                    },
                    {
                        label: "pid",
                        field: "pid",
                        align: "center",
                        searchable: true,
                    },
                    {
                        label: "Last Srv Date",
                        field: "last_service_date",
                        align: "center",
                        searchable: false,
                    },
                ],
            },
            pagination: {},
        };
    },
    methods: {
        getPatientList() {
            this.$parent.$parent.percentage = 0;
            axios.get("/api/patients/list").then((response) => {
                this.table.rows = response.data.data;
                this.pagination = response.data;
                this.loadedTable = true;
                this.$parent.$parent.percentage = 100;
            });
        },
        updateTablePagination(page) {
            //this.loadedTable = false;
            this.$parent.$parent.percentage = 0;
            axios.get("/api/patients/list?page=" + page).then((response) => {
                this.table.rows = response.data.data;
                this.pagination = response.data;
                //this.loadedTable = true;
                this.$parent.$parent.percentage = 100;
            });
        },
        searchMonitor: function (event) {
            /*if (event.target.value.length > 3) {
                this.loadingData = true;
                this.loadedTable = false;
                axios
                    .get(
                        "/api/patients/list/search/" +
                            event.target.name +
                            "/" +
                            event.target.value
                    )
                    .then((response) => {
                        console.log(response);
                        this.table.rows = response.data.data;
                        this.pagination = response.data;
                        this.loadedTable = true;
                    });
            }*/
        },
        extractSubelement(check) {
            if (Array.isArray(check.field)) {
                if (typeof check.index !== undefined) {
                    if (check.field[0] !== undefined) {
                        return check.field[0][check.index];
                    } else {
                        return "--";
                    }
                }
            } else if (typeof check.field === "object") {
                if (typeof check.index !== undefined) {
                    if (check.field[check.index] !== undefined) {
                        return check.field[check.index];
                    } else {
                        return "--";
                    }
                }
            }
            return check.field;
        },
    },
    watch: {
        // call again the method if the route changes
        $route: "getPatientList",
    },
    beforeCreate() {
        this.$parent.$parent.percentage = 0;
    },
    beforeMount() {
        this.pageTitle = this.$route.meta.title;
        this.name = this.$route.name;
        this.getPatientList();
    },
};
</script>
