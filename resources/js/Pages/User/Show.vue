<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Users Show
      </h2>
    </template>

    <div class="py-12 p-2">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          Name : {{ user.name }} <br />
          Email : {{ user.email }} <br />
          Role : {{ user.role }} <br />
          Created At : {{ user.created_at }} <br />
          Updated At : {{ user.updated_at }} <br />
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";

export default {
  components: {
    AppLayout,
  },

  props: ["user"],
};
</script>
