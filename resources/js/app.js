import "./bootstrap";

import { createApp } from "vue/dist/vue.esm-bundler";
import MyComponent from "@/components/MyComponent.vue";

const app = createApp({});
app.component("my-component", MyComponent);
app.mount("#app");
