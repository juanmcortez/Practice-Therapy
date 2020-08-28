import Home from '../components/pages/Home.vue';
import About from '../components/pages/About.vue';

export const Routes = [
    { path: '/', name: 'home', component: Home, meta: { title: 'Welcome' } },
    { path: '/about-us', name: 'about', component: About, meta: { title: 'About Us' } }
];
