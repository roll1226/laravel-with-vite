import "./bootstrap";
import { createApp } from "vue/dist/vue.esm-bundler.js";
import App from "./vue/App.vue";
import TaskComponent from "./vue/components/TaskComponent.vue";

const app = createApp({
    components: {
        App,
        TaskComponent,
    },
});

app.mount("#app");
