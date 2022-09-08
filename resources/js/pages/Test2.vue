<template>
    <v-app>
        <h1>Test2</h1>
        <router-link to="/">top</router-link>
        <example-component></example-component>
    </v-app>
</template>

<script>
import ExampleComponent from '../components/ExampleComponent.vue'

export default {
    components: {
        ExampleComponent
    },
}
</script>