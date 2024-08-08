<script lang="ts">
import {defineComponent} from "vue"

export default defineComponent({
    name: "CardComponent",
    props: {
    data: {
      type: Object as PropType<{ url: string }>,
      required: true
    }
  }
})
</script>


<template>
    <section class="w-100">
        <img :src="data.url" class="w-full"/>
    </section>
</template>