<script setup>
import NavbarComponent from './Component/NavbarComponent.vue';
import FooterComponent from './Component/FooterComponent.vue';
</script>

<template>
    <NavbarComponent/>
    <router-view v-slot="{ Component, route }">
        <div :key="route.name">
            <Component :is="Component" />
        </div>
    </router-view>
    <FooterComponent />    
</template>
