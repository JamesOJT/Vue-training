import './bootstrap';

window.Vue = require('vue').default;
import {createApp} from 'vue';

import App from './Components/Main.vue';

createApp(App)
.mount('#app');