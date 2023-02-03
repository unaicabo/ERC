import './bootstrap';

import { createApp } from "vue";
import Factura from "./vue/Factura.vue";
import { ZiggyVue } from 'ziggy-vue';

createApp(Factura).use(ZiggyVue);
createApp(Factura).mount("#app");