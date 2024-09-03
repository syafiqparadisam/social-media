import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("./Pages/HomeRoute.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
