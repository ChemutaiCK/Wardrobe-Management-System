import { createApp } from 'vue';
import ExampleComponent from './Components/TestComponent.vue';

const app = createApp({});
app.component('example-component', ExampleComponent);
app.mount('#app');
