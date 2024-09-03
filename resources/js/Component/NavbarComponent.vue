<script>
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
    <div class="w-full bg-blue-700 flex justify-around p-4 items-center">
      <div class="w-1/5 flex justify-center  text-white">
        <RouterLink class="font-bold text-3xl">Nimepix</RouterLink>
      </div>
      <div class="w-3/5 flex justify-center rounded-md bg-white items-center">
        <i class="pi ml-2 pi-search"></i>
        <input class="w-full p-2 focus:bg-transparent focus:outline-none rounded-md"/>
      </div>
      <div class="w-1/5 flex justify-center gap-2">
        <button  class="bg-white p-2 rounded-lg px-4 text-black font-bold gap-2"><i class="pi pi-upload"></i>Upload</button>
        <button class=" p-2 rounded-lg px-4 text-white font-bold border border-1">Login</button>
      </div>
    </div>
  </nav>
</template>
