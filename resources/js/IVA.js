import './bootstrap';

import { createApp } from "vue";
import IVA from "./vue/IVA.vue";
import { ZiggyVue } from 'ziggy-vue';

createApp(IVA).use(ZiggyVue);
createApp(IVA).mount("#app");
