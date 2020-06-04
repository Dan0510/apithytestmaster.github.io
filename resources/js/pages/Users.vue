<template>
  <div class="mt-4 p-8">
    <div class="flex flex-wrap w-full">
      <input
        class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block appearance-none leading-normal"
        type="search"
        placeholder="buscar">
      <div class="w-full mt-2">
        <table class="table-fixed w-full">
          <thead>
            <tr>
              <th class="w-1/2 px-4 py-2">Nombre</th>
              <th class="w-1/4 px-4 py-2">Email</th>
              <th class="w-1/4 px-4 py-2">Rol</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border px-4 py-2">Adam</td>
              <td class="border px-4 py-2">adam@test.com</td>
              <td class="border px-4 py-2">Administrador</td>
            </tr>
            <tr class="bg-gray-100">
              <td class="border px-4 py-2">Coraline</td>
              <td class="border px-4 py-2">coraline@test.com</td>
              <td class="border px-4 py-2">Profesor</td>
            </tr>
            <tr>
              <td class="border px-4 py-2">Edward</td>
              <td class="border px-4 py-2">edward@test.com</td>
              <td class="border px-4 py-2">Estudiante</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Users"
}
</script>

<style scoped>

</style>
