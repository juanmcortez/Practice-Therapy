import Dashboard from '../components/pages/Dashboard.vue';

import List from '../components/pages/patients/List.vue';
import Search from '../components/pages/patients/Search.vue';
import New from '../components/pages/patients/New.vue';
import Ledger from '../components/pages/patients/Ledger.vue';
import History from '../components/pages/patients/History.vue';

import Manager from '../components/pages/billing/Manager.vue';
import Payments from '../components/pages/billing/Payments.vue';
import Received from '../components/pages/billing/Received.vue';

import Calendar from '../components/pages/scheduler/Calendar.vue';
import Appoinments from '../components/pages/scheduler/Appoinments.vue';

import Reports from '../components/pages/reports/Reports.vue';
import Elegibility from '../components/pages/reports/Elegibility.vue';

export const Routes = [
    { path: '/', name: 'dashboard', component: Dashboard, meta: { title: 'Welcome' } },

    { path: '/patients/list', name: 'list', component: List, meta: { title: 'Patients list' } },
    { path: '/patients/search', name: 'search', component: Search, meta: { title: 'Patient search' } },
    { path: '/patients/new', name: 'new', component: New, meta: { title: 'New patient' } },
    { path: '/patients/ledger', name: 'ledger', component: Ledger, meta: { title: 'Patient ledger' } },
    { path: '/patients/history', name: 'history', component: History, meta: { title: 'Patients history' } },

    { path: '/billing/manager', name: 'manager', component: Manager, meta: { title: 'Billing Manager' } },
    { path: '/billing/payments', name: 'payments', component: Payments, meta: { title: 'Payments' } },
    { path: '/billing/received', name: 'received', component: Received, meta: { title: 'Payments received' } },

    { path: '/scheduler/calendar', name: 'calendar', component: Calendar, meta: { title: 'Calendar' } },
    { path: '/scheduler/appoinments', name: 'appoinments', component: Appoinments, meta: { title: 'Appoinments' } },

    { path: '/reports', name: 'reports', component: Reports, meta: { title: 'Reports' } },
    { path: '/elegibility', name: 'elegibility', component: Elegibility, meta: { title: 'Elegibility' } },
];
