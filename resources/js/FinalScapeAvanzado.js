import './bootstrap';

import { createApp } from "vue";
import FinalScape from "./vue/FinalScapeAvanzado.vue";
import { ZiggyVue } from 'ziggy-vue';

createApp(FinalScape).use(ZiggyVue);
createApp(FinalScape).mount("#app");