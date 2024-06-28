<template>
    <div class="container">
        <div class="topbar">
            <TopbarComponent></TopbarComponent>
        </div>
        <div class="sidebar">
            <SidebarComponent></SidebarComponent>
        </div>
        <div class="main">
            <ActivitiesComponent></ActivitiesComponent>
        </div>
    </div>
</template>

<script>

import TopbarComponent from '@/components/TopbarComponent.vue'
import ActivitiesComponent from '@/components/ActivitiesComponent.vue'
import SidebarComponent from '@/components/SidebarComponent.vue'

export default {
    name: 'ActivitiesView',
    components: {
        TopbarComponent,
        ActivitiesComponent,
        SidebarComponent
    }
}
</script>

<style scoped>
.container {
    display: grid;
    grid-template-columns: 250px 1fr; /* Sidebar takes fixed width, topbar and main take remaining space */
    grid-template-rows: 60px 1fr; /* Topbar has fixed height, main takes remaining space */
    height: 100vh;
}

.sidebar {
    grid-row: 1 / 3; /* Sidebar spans both rows */
}

.topbar {
    grid-column: 2; /* Topbar is in the second column */
    grid-row: 1; /* Topbar is in the first row */
    height: 60px; /* Fixed height for the topbar */
}

.main {
    grid-column: 2; /* Main content is in the second column */
    grid-row: 2; /* Main content is in the second row */
    padding: 2%;
    overflow-y: auto;
}
</style>