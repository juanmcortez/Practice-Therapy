import Dashboard from '../components/pages/Dashboard.vue';

const Billing = { name: 'billing', template: '<div class="section billing"><router-view></router-view></div>' };
import Awos from '../components/pages/billing/Awos.vue';
import Letters from '../components/pages/billing/Letters.vue';
import Manager from '../components/pages/billing/Manager.vue';
import Statements from '../components/pages/billing/Statements.vue';

const Patients = { name: 'patients', template: '<div class="section patients"><router-view></router-view></div>' };
import History from '../components/pages/patients/History.vue';
import Ledger from '../components/pages/patients/Ledger.vue';
import List from '../components/pages/patients/List.vue';
import New from '../components/pages/patients/New.vue';
import Search from '../components/pages/patients/Search.vue';

const Payments = { name: 'payments', template: '<div class="section payments"><router-view></router-view></div>' };
import PostPayment from '../components/pages/payments/PostPayment.vue';
import Received from '../components/pages/payments/Received.vue';

const Reports = { name: 'reports', template: '<div class="section reports"><router-view></router-view></div>' };
import ReportsView from '../components/pages/reports/View.vue';

const Scheduler = { name: 'scheduler', template: '<div class="section scheduler"><router-view></router-view></div>' };
import Appoinments from '../components/pages/scheduler/Appoinments.vue';
import Calendar from '../components/pages/scheduler/Calendar.vue';

const Tools = { name: 'tools', template: '<div class="section tools"><router-view></router-view></div>' };
import Elegibility from '../components/pages/tools/Elegibility.vue';
import ElegibilityImport from '../components/pages/tools/ElegibilityImport.vue';

import DynamicContent from '../components/pages/auto/DynamicContent.vue';

export const Routes = [
    { path: '/', name: 'dashboard', component: Dashboard, meta: { title: 'Welcome' } },

    {
        path: '/billing', name: 'billing', component: Billing, redirect: '/billing/manager',
        children: [
            { path: 'automatic-write-offs', name: 'awos', component: Awos, meta: { title: 'Automatic Write Off\'s' } },
            { path: 'letters', name: 'letters', component: Letters, meta: { title: 'Letters' } },
            { path: 'manager', name: 'manager', component: Manager, meta: { title: 'Billing Manager' } },
            { path: 'statements', name: 'statements', component: Statements, meta: { title: 'Statements' } },
        ]
    },

    {
        path: '/patients', name: 'patients', component: Patients, redirect: '/patients/list',
        children: [
            { path: 'history', name: 'history', component: History, meta: { title: 'Patients history' } },
            { path: 'ledger', name: 'ledger', component: Ledger, meta: { title: 'Patient ledger' } },
            { path: 'list', name: 'list', component: List, meta: { title: 'Patients list' } },
            { path: 'new', name: 'new', component: New, meta: { title: 'New patient' } },
            { path: 'search', name: 'search', component: Search, meta: { title: 'Patient search' } },
        ]
    },

    {
        path: '/payments', name: 'payments', component: Payments, redirect: '/payments/post-payments',
        children: [
            { path: 'payments-received', name: 'received', component: Received, meta: { title: 'Payments received' } },
            { path: 'post-payments', name: 'post-payments', component: PostPayment, meta: { title: 'Post a payment' } },
        ]
    },

    {
        path: '/reports', name: 'reports', component: Reports, redirect: '/reports/aged-AR-by-entry-date',
        children: [
            { path: 'aged-AR-by-entry-date', name: 'agedARentrydate', component: ReportsView, meta: { title: 'Aged AR by Entry Date' } },
            { path: 'denials', name: 'denials', component: ReportsView, meta: { title: 'Denials' } },
            { path: 'payments-and-adjustments-to-charges', name: 'paymadjcharges', component: ReportsView, meta: { title: 'Payments & Adjustments to Charges' } },
        ]
    },

    {
        path: '/scheduler', name: 'scheduler', component: Scheduler, redirect: '/scheduler/calendar',
        children: [
            { path: 'appoinments', name: 'appoinments', component: Appoinments, meta: { title: 'Appoinments' } },
            { path: 'calendar', name: 'calendar', component: Calendar, meta: { title: 'Calendar' } },
        ]
    },

    {
        path: '/tools', name: 'tools', component: Tools, redirect: '/tools/elegibility',
        children: [
            { path: 'elegibility', name: 'elegibility', component: Elegibility, meta: { title: 'Elegibility' } },
            { path: 'elegibility-import', name: 'elegibility-import', component: ElegibilityImport, meta: { title: 'Elegibility Import' } },
        ]
    },

    { path: '/privacy-policy', name: 'privacy', component: DynamicContent, meta: { title: 'Privacy Policy' } },
    { path: '/terms-and-conditions', name: 'termsconditions', component: DynamicContent, meta: { title: 'Terms & Conditions' } },

    { path: '*', name: 404 }
];
