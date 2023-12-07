import { createApp } from 'vue';
import App from './components/App.vue';
import router from './router/index';
import axios from 'axios';

const app = createApp(App);
// Make axios available globally
app.config.globalProperties.$axios = axios;

app.use(router);
app.mount('#app');
