import './bootstrap';

import { createApp } from "vue";
import Puzle from "./vue/Puzle.vue";
import { ZiggyVue } from 'ziggy-vue';

createApp(Puzle).use(ZiggyVue);
createApp(Puzle).mount("#app");
