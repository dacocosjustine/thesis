<template>
    <div class="header">
        <a href="#">
            <img src="@/assets/pnc-header.svg" alt="Logo" class="logo">
        </a>
    </div>

    <!-- <div class="menu">
        <div class="menu-item">
            <div class="menu-icon">
                <font-awesome-icon icon="fa-solid fa-house" />
            </div>
            <div class="menu-text">
                <nav>
                    <router-link to="/">Student Activities</router-link>
                </nav>
            </div>
        </div>
    </div> -->

    <nav>
        <router-link to="/">Student Activities</router-link>
        <router-link to="/department">Student Organization</router-link>
        <router-link to="/scholarship">Scholarship Programs</router-link>
        <router-link to="/assistantship">Student Assistantship</router-link>
        <router-link to="/discipline">Student Discipline</router-link>
        <router-link to="/account">Account</router-link>
    </nav>
</template>

<script>

export default {
    name: 'SidebarComponent',
}

</script>

<style scoped>
.logo {
    width: 90%;
    height: 90%;
    object-fit: contain;
}

</style>