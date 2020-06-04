<template>
  <div>
    <nav-layout></nav-layout>
    <div class="container mx-auto px-4">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
export default {
  name: "App",
  components: {
    'nav-layout': () => import('./layouts/NavLayout')
  }
}
</script>

<style scoped>

</style>
