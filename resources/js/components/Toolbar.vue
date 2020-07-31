<template>
    <v-toolbar dense>
      <v-toolbar-title>LARAVEL + VUE SPA</v-toolbar-title>
        <router-link :to="{ name: 'home' }">
          <v-btn text>Home</v-btn>
        </router-link>
        <router-link :to="{ name: 'hello' }">
          <v-btn text>Hello</v-btn>
        </router-link>
    </v-toolbar>
</template>
