import './bootstrap';

import { createApp } from "vue";
import Cuestionario from "./vue/Cuestionario.vue";
import { ZiggyVue } from 'ziggy-vue';

createApp(Cuestionario).use(ZiggyVue);
createApp(Cuestionario).mount("#app");
