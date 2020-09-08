<template>
    <div class="content">
        <h1 class="my-3" v-html="pageTitle"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <router-link :to="{ name: 'dashboard' }" class>Dashboard</router-link>
            </li>
            <li class="breadcrumb-item">
                <router-link :to="{ name: 'list' }" class>Patients list</router-link>
            </li>
            <li class="breadcrumb-item">Ledger</li>
            <li class="breadcrumb-item active" v-html="patient.full_name"></li>
        </ol>
        <div class="row">
            <div class="col-12 col-md-3">
                <ul class="list-group list-group-flush mb-4">
                    <li
                        class="list-group-item list-group-item-info d-flex justify-content-between align-items-center"
                    >
                        <span v-html="patient.full_name"></span>
                        <span v-html="patient.avatar"></span>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-4 text-uppercase text-muted text-right">pid</div>
                            <div class="col-8" v-html="patient.pid"></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-4 text-uppercase text-muted text-right">address</div>
                            <div class="col-8" v-html="patient.address.address_1"></div>
                        </div>
                        <div class="row" v-show="(patient.address.address_2!=null)">
                            <div class="col-4 text-uppercase text-muted text-right">&nbsp;</div>
                            <div class="col-8" v-html="patient.address.address_2"></div>
                        </div>
                        <div class="row">
                            <div class="col-4 text-uppercase text-muted text-right">&nbsp;</div>
                            <div class="col-8" v-html="patient.address.city"></div>
                        </div>
                        <div class="row">
                            <div class="col-4 text-uppercase text-muted text-right">&nbsp;</div>
                            <div
                                class="col-8"
                                v-html="patient.address.state+', '+patient.address.zip"
                            ></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-4 text-uppercase text-muted text-right">DOB</div>
                            <div class="col-8" v-html="patient.identity.dob"></div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-4 text-uppercase text-muted text-right">SSN</div>
                            <div class="col-8" v-html="patient.identity.ssn"></div>
                        </div>
                    </li>
                </ul>
                <div
                    class="nav flex-column nav-pills"
                    id="v-pills-tab"
                    role="tablist"
                    aria-orientation="vertical"
                >
                    <a
                        class="nav-link active"
                        id="ledger-tab"
                        data-toggle="pill"
                        href="#ledger"
                        role="tab"
                        aria-controls="ledger"
                        aria-selected="true"
                    >Ledger</a>
                    <a
                        class="nav-link"
                        id="personal-tab"
                        data-toggle="pill"
                        href="#personal"
                        role="tab"
                        aria-controls="personal"
                        aria-selected="false"
                    >Personal</a>
                    <a
                        class="nav-link"
                        id="insurance-tab"
                        data-toggle="pill"
                        href="#insurance"
                        role="tab"
                        aria-controls="insurance"
                        aria-selected="false"
                    >Insurance</a>
                </div>
            </div>
            <div class="col-12 col-md-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div
                        class="tab-pane fade show active"
                        id="ledger"
                        role="tabpanel"
                        aria-labelledby="ledger-tab"
                    >
                        <table
                            class="table table-borderless table-condensed table-striped table-dark"
                        >
                            <thead>
                                <tr>
                                    <td class="text-center">Balance</td>
                                    <td class="text-center">Total</td>
                                    <td class="text-center">Unbilled</td>
                                    <td class="text-center">Current</td>
                                    <td class="text-center">>30 Days</td>
                                    <td class="text-center">>60 Days</td>
                                    <td class="text-center">>90 Days</td>
                                    <td class="text-center">>120 Days</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">Insurance</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                </tr>
                                <tr>
                                    <td class="text-center">Patient</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                </tr>
                                <tr>
                                    <td class="text-center">Account</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                    <td class="text-center">00.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="inv1head">
                                    <h5 class="mb-0">
                                        <button
                                            class="btn btn-link"
                                            data-toggle="collapse"
                                            data-target="#inv1"
                                            aria-expanded="true"
                                            aria-controls="inv1"
                                        >Inv #3</button>
                                    </h5>
                                </div>
                                <div
                                    id="inv1"
                                    class="collapse show"
                                    aria-labelledby="inv1head"
                                    data-parent="#accordion"
                                >
                                    <div class="card-body">
                                        <div>Inv # Svc Date Code Mod ICDs Pvdr Units Charge Paid to Patient PBR Paid Adj Bal Entry Date Insurance</div>
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="inv2head">
                                    <h5 class="mb-0">
                                        <button
                                            class="btn btn-link collapsed"
                                            data-toggle="collapse"
                                            data-target="#inv2"
                                            aria-expanded="false"
                                            aria-controls="inv2"
                                        >Inv #2</button>
                                    </h5>
                                </div>
                                <div
                                    id="inv2"
                                    class="collapse"
                                    aria-labelledby="inv2head"
                                    data-parent="#accordion"
                                >
                                    <div class="card-body">
                                        <div>Inv # Svc Date Code Mod ICDs Pvdr Units Charge Paid to Patient PBR Paid Adj Bal Entry Date Insurance</div>
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="inv3head">
                                    <h5 class="mb-0">
                                        <button
                                            class="btn btn-link collapsed"
                                            data-toggle="collapse"
                                            data-target="#inv3"
                                            aria-expanded="false"
                                            aria-controls="inv3"
                                        >Inv #1</button>
                                    </h5>
                                </div>
                                <div
                                    id="inv3"
                                    class="collapse"
                                    aria-labelledby="inv3head"
                                    data-parent="#accordion"
                                >
                                    <div class="card-body">
                                        <div>Inv # Svc Date Code Mod ICDs Pvdr Units Charge Paid to Patient PBR Paid Adj Bal Entry Date Insurance</div>
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="tab-pane fade"
                        id="personal"
                        role="tabpanel"
                        aria-labelledby="personal-tab"
                    >...</div>
                    <div
                        class="tab-pane fade"
                        id="insurance"
                        role="tabpanel"
                        aria-labelledby="insurance-tab"
                    >...</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "",
    data() {
        return {
            pageTitle: "",
            pid: 0,
            patient: "",
        };
    },
    methods: {
        loadPatient() {
            this.$parent.$parent.percentage = 0;
            axios.get("/api/patients/ledger/" + this.pid).then((response) => {
                this.patient = response.data;
                this.$parent.$parent.percentage = 100;
            });
        },
    },
    beforeCreate() {
        if (Object.keys(this.$route.params).length === 0) {
            this.$router.push({ name: "list" });
        }
        this.$parent.$parent.percentage = 0;
    },
    beforeMount() {
        this.pageTitle = this.$route.meta.title;
        this.name = this.$route.name;
        this.pid = this.$route.params.pid;
        this.loadPatient();
    },
};
</script>
