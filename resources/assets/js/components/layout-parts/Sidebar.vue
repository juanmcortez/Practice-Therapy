<template>
    <nav class="PT-sidenav accordion PT-sidenav-dark" id="sidenavAccordion">
        <div class="PT-sidenav-menu">
            <div class="nav sticky-top">
                <div class="PT-sidenav-menu-heading py-0">&nbsp;</div>

                <router-link
                    active-class="active"
                    exact
                    :to="{ name: 'dashboard' }"
                    class="nav-link"
                >
                    <div class="PT-nav-link-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>Dashboard
                </router-link>

                <!-- <div class="PT-sidenav-menu-heading">&nbsp;</div> -->

                <a
                    class="nav-link collapsed"
                    href="#"
                    data-toggle="collapse"
                    data-target="#collapsePatients"
                    aria-expanded="false"
                    aria-controls="collapsePatients"
                >
                    <div class="PT-nav-link-icon">
                        <i class="fas fa-hospital-user"></i>
                    </div>Patients
                    <div class="PT-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div
                    class="collapse"
                    id="collapsePatients"
                    aria-labelledby="headingOne"
                    data-parent="#sidenavAccordion"
                >
                    <nav class="PT-sidenav-menu-nested nav">
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'list' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-users"></i>
                            </div>List
                        </router-link>
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'search' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-search"></i>
                            </div>Search
                        </router-link>
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'new' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-user-plus"></i>
                            </div>New
                        </router-link>
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'ledger' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-file-invoice"></i>
                            </div>Ledger
                        </router-link>
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'history' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-history"></i>
                            </div>History
                        </router-link>
                    </nav>
                </div>

                <!-- <div class="PT-sidenav-menu-heading">&nbsp;</div> -->

                <a
                    class="nav-link collapsed"
                    href="#"
                    data-toggle="collapse"
                    data-target="#collapseBilling"
                    aria-expanded="false"
                    aria-controls="collapseBilling"
                >
                    <div class="PT-nav-link-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>Billing
                    <div class="PT-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div
                    class="collapse"
                    id="collapseBilling"
                    aria-labelledby="headingOne"
                    data-parent="#sidenavAccordion"
                >
                    <nav class="PT-sidenav-menu-nested nav">
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'manager' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-file-invoice-dollar"></i>
                            </div>Manager
                        </router-link>
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'letters' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-file-invoice-dollar"></i>
                            </div>Letters
                        </router-link>
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'statements' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-file-invoice-dollar"></i>
                            </div>Statements
                        </router-link>
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'awos' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-file-invoice-dollar"></i>
                            </div>Automatic Write Off's
                        </router-link>
                    </nav>
                </div>

                <!-- <div class="PT-sidenav-menu-heading">&nbsp;</div> -->

                <a
                    class="nav-link collapsed"
                    href="#"
                    data-toggle="collapse"
                    data-target="#collapsePayments"
                    aria-expanded="false"
                    aria-controls="collapsePayments"
                >
                    <div class="PT-nav-link-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>Payments
                    <div class="PT-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div
                    class="collapse"
                    id="collapsePayments"
                    aria-labelledby="headingOne"
                    data-parent="#sidenavAccordion"
                >
                    <nav class="PT-sidenav-menu-nested nav">
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'post-payments' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-hand-holding-usd"></i>
                            </div>Post a payment
                        </router-link>
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'received' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-receipt"></i>
                            </div>Payments received
                        </router-link>
                    </nav>
                </div>

                <!-- <div class="PT-sidenav-menu-heading">Scheduler</div> -->

                <a
                    class="nav-link collapsed"
                    href="#"
                    data-toggle="collapse"
                    data-target="#collapseScheduler"
                    aria-expanded="false"
                    aria-controls="collapseScheduler"
                >
                    <div class="PT-nav-link-icon">
                        <i class="fas fa-calendar"></i>
                    </div>Scheduler
                    <div class="PT-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div
                    class="collapse"
                    id="collapseScheduler"
                    aria-labelledby="headingOne"
                    data-parent="#sidenavAccordion"
                >
                    <nav class="PT-sidenav-menu-nested nav">
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'calendar' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>Calendar
                        </router-link>
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'appoinments' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-calendar-plus"></i>
                            </div>Appoinments
                        </router-link>
                    </nav>
                </div>

                <!-- <div class="PT-sidenav-menu-heading">&nbsp;</div> -->

                <a
                    class="nav-link collapsed"
                    href="#"
                    data-toggle="collapse"
                    data-target="#collapseTools"
                    aria-expanded="false"
                    aria-controls="collapseTools"
                >
                    <div class="PT-nav-link-icon">
                        <i class="fas fa-clipboard"></i>
                    </div>Tools
                    <div class="PT-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div
                    class="collapse"
                    id="collapseTools"
                    aria-labelledby="headingOne"
                    data-parent="#sidenavAccordion"
                >
                    <nav class="PT-sidenav-menu-nested nav">
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'elegibility' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-user-check"></i>
                            </div>Elegibility
                        </router-link>
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'elegibility-import' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-user-check"></i>
                            </div>Elegibility Import
                        </router-link>
                    </nav>
                </div>

                <!-- <div class="PT-sidenav-menu-heading">&nbsp;</div> -->

                <a
                    class="nav-link collapsed"
                    href="#"
                    data-toggle="collapse"
                    data-target="#collapseReports"
                    aria-expanded="false"
                    aria-controls="collapseReports"
                >
                    <div class="PT-nav-link-icon">
                        <i class="fas fa-clipboard"></i>
                    </div>Reports
                    <div class="PT-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div
                    class="collapse"
                    id="collapseReports"
                    aria-labelledby="headingOne"
                    data-parent="#sidenavAccordion"
                >
                    <nav class="PT-sidenav-menu-nested nav">
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'agedARentrydate' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>Aged AR by Entry Date
                        </router-link>
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'paymadjcharges' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>Paym. and Adj. to Charges
                        </router-link>
                        <router-link
                            active-class="active"
                            exact
                            :to="{ name: 'denials' }"
                            class="nav-link"
                        >
                            <div class="PT-nav-link-icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>Denials
                        </router-link>
                    </nav>
                </div>

                <div class="PT-sidenav-menu-heading">&nbsp;</div>

                <!-- <div class="PT-sidenav-menu-heading">Practice Therapy</div>

                <router-link active-class="active" exact :to="{ name: 'list' }" class="nav-link">
                    <div class="PT-nav-link-icon">
                        <i class="fas fa-building"></i>
                    </div>About Us
                </router-link>-->
            </div>
        </div>
        <div class="PT-sidenav-footer text-center">
            <div class="small">
                <span class="mr-2 text-info">v1.1.0</span>
                <span class="ml-2 text-muted">&copy; Juan M. Cortéz - 2020</span>
            </div>
        </div>
    </nav>
</template>
<script>
export default {
    name: "SideBar",
};
</script>
