<template>
    <div class="container">
        <LoginComponent></LoginComponent>
    </div>
</template>

<script>
import LoginComponent from '@/components/LoginComponent.vue'

export default {
    name: 'LoginView',
    components: {
        LoginComponent
    }
}

</script>

<style scoped>
.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}
</style>