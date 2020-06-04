<template>
  <div class="bg-white shadow-md rounded p-8 mt-4">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="file">
        Subir Excel
      </label>
      <input
        id="file"
        class="bg-white"
        type="file"
        accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
    </div>
    <div class="mb-6">
      <form method="get" action="/downloads/apithy-test.xlsx">
        <span class="block text-gray-700 text-sm font-bold mb-2">
          Descargar excel de ejemplo
        </span>
        <button id="download" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Descargar</button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: "ImportUsers"
}
</script>

<style scoped>

</style>
