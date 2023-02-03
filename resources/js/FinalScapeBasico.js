import './bootstrap';

import { createApp } from "vue";
import FinalScape from "./vue/FinalScapeBasico.vue";
import { ZiggyVue } from 'ziggy-vue';

createApp(FinalScape).use(ZiggyVue);
createApp(FinalScape).mount("#app");