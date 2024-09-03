<script>
import NavbarComponent from './Component/NavbarComponent.vue';
</script>

<template>
    <NavbarComponent/>
    <router-view v-slot="{ Component, route }">
        <div :key="route.name">
            <Component :is="Component" />
        </div>
    </router-view>
</template>
