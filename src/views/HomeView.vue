<script lang="ts">
import { defineComponent } from 'vue'
import NavbarComponent from '../components/NavbarComponent.vue'
import CardComponent from '../components/CardComponent.vue'
import apiUrl from '../config/apiUrl.ts'

export default defineComponent({
  name: 'HomeView',
  components: {
    NavbarComponent
    // CardComponent
  },
  data() {
    return {
      data: {},
      apiUrl: apiUrl
    }
  },
  async mounted() {
    const category = Math.round(Math.random() * this.apiUrl.length - 1)
    const res = await fetch(`https://waifu.it/api/v4/${this.apiUrl[category]}`, {
      headers: {
        Authorization: import.meta.env.VITE_WAIFU_IT_APIKEY
      }
    })
    const data = await res.json()
    this.data = data
  }
})
</script>

<template>
  <main>
    <NavbarComponent />
    <section id="header" class="w-full">
      <img :src="data.url" class="w-full" />
    </section>
    <!-- <CardComponent :data="data"/> -->
  </main>
</template>
