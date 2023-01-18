<template>
    <div>
        Hello {{ name }}, Greetings from Component!
        <button type="btn" @click="sayHello">Click me</button>
    </div>
</template>

<script setup>
import { onMounted } from "vue";

const props = defineProps({
    name: String,
});

const sayHello = () => {
    alert("Hello!");
};
onMounted(() => console.log("Component was loaded..."));
</script>
