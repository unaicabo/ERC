import './bootstrap';

import { createApp } from "vue";
import CodBarras from "./vue/CodBarras.vue";
import { ZiggyVue } from 'ziggy-vue';

createApp(CodBarras).use(ZiggyVue);
createApp(CodBarras).mount("#app");