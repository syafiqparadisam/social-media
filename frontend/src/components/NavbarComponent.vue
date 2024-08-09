<script lang="ts">
export default {
  name: 'NavbarComponent',
  methods: {
    redirectGh: () => {
      window.open('https://github.com/syafiqparadisam')
    }
  }
}
</script>

<template>
  <nav>
    <div class="w-full bg-blue-700 text-white flex justify-around p-4 items-center">
      <div class="w-1/5 flex justify-center">
        <RouterLink class="font-bold">Pick Your Waifu</RouterLink>
      </div>
      <div class="w-3/5 flex justify-center">
        <input class="p-2 w-full rounded-md" />
      </div>
      <div class="w-1/5 flex justify-center">
        <span class="pi pi-github text-3xl cursor-pointer" @click="redirectGh"></span>
      </div>
    </div>
  </nav>
</template>
